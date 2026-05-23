<?php

namespace App\Http\Controllers\Admin;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = Footer::orderBy('sort_order', 'asc')->get();
        return view('backEnd.footer.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backEnd.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'phone_number' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'facebook_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
            'whatsapp_link' => 'nullable|url',
            'sort_order' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        $slug = str_replace(' ', '-', strtolower($request->title));
        $slug = preg_replace('/[^a-z0-9-]/', '', $slug);

        Footer::create([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'link' => $request->link,
            'phone_number' => $request->phone_number,
            'whatsapp_number' => $request->whatsapp_number,
            'address' => $request->address,
            'facebook_link' => $request->facebook_link,
            'youtube_link' => $request->youtube_link,
            'whatsapp_link' => $request->whatsapp_link,
            'sort_order' => $request->sort_order ?? 0,
            'status' => $request->status ? 1 : 0,
        ]);

        toastr()->success('Footer settings created successfully!');
        return redirect()->route('footer.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {
        return view('backEnd.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Footer $footer)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'phone_number' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'facebook_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
            'whatsapp_link' => 'nullable|url',
            'sort_order' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        $slug = str_replace(' ', '-', strtolower($request->title));
        $slug = preg_replace('/[^a-z0-9-]/', '', $slug);

        $footer->update([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'link' => $request->link,
            'phone_number' => $request->phone_number,
            'whatsapp_number' => $request->whatsapp_number,
            'address' => $request->address,
            'facebook_link' => $request->facebook_link,
            'youtube_link' => $request->youtube_link,
            'whatsapp_link' => $request->whatsapp_link,
            'sort_order' => $request->sort_order ?? 0,
            'status' => $request->status ? 1 : 0,
        ]);

        toastr()->success('Footer settings updated successfully!');
        return redirect()->route('footer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
        toastr()->success('Footer settings deleted successfully!');
        return redirect()->route('footer.index');
    }

    /**
     * Change status to active
     */
    public function active(Footer $footer)
    {
        $footer->update(['status' => 1]);
        toastr()->success('Footer status updated!');
        return back();
    }

    /**
     * Change status to inactive
     */
    public function inactive(Footer $footer)
    {
        $footer->update(['status' => 0]);
        toastr()->success('Footer status updated!');
        return back();
    }
}
