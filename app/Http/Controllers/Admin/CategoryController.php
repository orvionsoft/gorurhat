<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Toastr;
class CategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','store']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = Category::orderBy('id','DESC')->with('category')->get();
        // return $data;
        return view('backEnd.category.index',compact('data'));
    }
    public function create()
    {
        $categories = Category::orderBy('id','DESC')->select('id','name')->get();
        return view('backEnd.category.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);

        $input = $request->except('files');
        $input['slug'] = strtolower(preg_replace('/\s+/', '-', $request->name));
        $input['slug'] = str_replace('/', '', $input['slug']);

        $input['parent_id'] = $request->parent_id ? $request->parent_id : 0;
        $input['front_view'] = $request->front_view ? 1 : 0;
        $input['count'] = $request->count ? $request->count : 0;
        Category::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('categories.index');
    }
    
    public function edit($id)
    {
        $edit_data = Category::find($id);
        $categories = Category::select('id','name')->get();
        return view('backEnd.category.edit',compact('edit_data','categories'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $update_data = Category::find($request->id);
        $input = $request->except('files');

        $input['slug'] = strtolower(preg_replace('/\s+/', '-', $request->name));
        $input['slug'] = str_replace('/', '', $input['slug']);

        $input['parent_id'] = $request->parent_id ? $request->parent_id : 0;
        $input['front_view'] = $request->front_view ? 1 : 0;
        $input['status'] = $request->status ? 1 : 0;
        $input['count'] = $request->count ? $request->count : 0;
        
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('categories.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = Category::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Category::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Category::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
