<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cow;
use App\Models\CowImage;
use File;
use Str;

class CowsController extends Controller
{
    public function index(Request $request)
    {
        if($request->keyword){
            $data = Cow::orderBy('id','DESC')
                ->where('name', 'LIKE', '%' . $request->keyword . "%")
                ->with('images')
                ->paginate(20);
        }else{
            $data = Cow::orderBy('id','DESC')->with('images')->paginate(20);
        }
        return view('backEnd.cows.index', compact('data'));
    }

    public function create()
    {
        return view('backEnd.cows.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric|min:0|max:999999999999999.99',
            'breed' => 'nullable|string',
            'age' => 'nullable|numeric',
            'description' => 'nullable|string',
        ]);

        $last_id = Cow::orderBy('id', 'desc')->select('id')->first();
        $last_id = $last_id ? $last_id->id + 1 : 1;

        $input = $request->except(['images']);
        $input['slug'] = strtolower(preg_replace('/[\/\s]+/', '-', $request->name . '-' . $last_id));
        $input['status'] = $request->status ? 'active' : 'inactive';

        $cow = Cow::create($input);

        // Store images
        $images = $request->file('images');
        if($images){
            foreach ($images as $image) {
                $name = time().'-'.$image->getClientOriginalName();
                $name = strtolower(preg_replace('/\s+/', '-', $name));
                $uploadPath = 'public/uploads/cows/';
                
                if(!is_dir($uploadPath)){
                    mkdir($uploadPath, 0777, true);
                }
                
                $image->move($uploadPath, $name);
                CowImage::create([
                    'cow_id' => $cow->id,
                    'image' => $uploadPath . $name,
                ]);
            }
        }

        return redirect()->route('cows.index')->with('message', 'Cow added successfully');
    }

    public function edit($id)
    {
        $data = Cow::findOrFail($id);
        return view('backEnd.cows.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $cow = Cow::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric|min:0|max:999999999999999.99',
            'breed' => 'nullable|string',
            'age' => 'nullable|numeric',
            'description' => 'nullable|string',
        ]);

        $input = $request->except(['images', '_token', '_method']);
        $input['status'] = $request->status ? 'active' : 'inactive';

        $cow->update($input);

        // Store new images if uploaded
        $images = $request->file('images');
        if($images){
            foreach ($images as $image) {
                $name = time().'-'.$image->getClientOriginalName();
                $name = strtolower(preg_replace('/\s+/', '-', $name));
                $uploadPath = 'public/uploads/cows/';
                
                if(!is_dir($uploadPath)){
                    mkdir($uploadPath, 0777, true);
                }
                
                $image->move($uploadPath, $name);
                CowImage::create([
                    'cow_id' => $cow->id,
                    'image' => $uploadPath . $name,
                ]);
            }
        }

        return redirect()->route('cows.index')->with('message', 'Cow updated successfully');
    }

    public function destroy($id)
    {
        $cow = Cow::findOrFail($id);
        
        // Delete all images
        $images = CowImage::where('cow_id', $id)->get();
        foreach($images as $image){
            if(File::exists($image->image)){
                File::delete($image->image);
            }
        }
        CowImage::where('cow_id', $id)->delete();

        $cow->delete();

        return redirect()->route('cows.index')->with('message', 'Cow deleted successfully');
    }

    // AJAX: Upload image via modal
    public function uploadImage(Request $request)
    {
        $this->validate($request, [
            'cow_id' => 'required|exists:cows,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $name = time().'-'.$image->getClientOriginalName();
        $name = strtolower(preg_replace('/\s+/', '-', $name));
        $uploadPath = 'public/uploads/cows/';

        if(!is_dir($uploadPath)){
            mkdir($uploadPath, 0777, true);
        }

        $image->move($uploadPath, $name);

        $cowImage = CowImage::create([
            'cow_id' => $request->cow_id,
            'image' => $uploadPath . $name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Image uploaded successfully',
            'data' => $cowImage,
        ]);
    }

    // AJAX: Delete image
    public function deleteImage($id)
    {
        $cowImage = CowImage::findOrFail($id);
        
        if(File::exists($cowImage->image)){
            File::delete($cowImage->image);
        }

        $cowImage->delete();

        return response()->json([
            'success' => true,
            'message' => 'Image deleted successfully',
        ]);
    }

    // AJAX: Get cow images
    public function getImages($cowId)
    {
        $images = CowImage::where('cow_id', $cowId)->get();
        
        return response()->json([
            'success' => true,
            'data' => $images,
        ]);
    }
}
