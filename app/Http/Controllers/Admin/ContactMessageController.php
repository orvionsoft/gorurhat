<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Toastr;

class ContactMessageController extends Controller
{
    public function __construct()
    {
         // Temporarily removed permission checks for testing
         // $this->middleware('permission:contact-list', ['only' => ['index','show']]);
         // $this->middleware('permission:contact-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $messages = ContactMessage::orderBy('created_at', 'desc')->get();
        return view('backEnd.contact_message.index', compact('messages'));
    }

    public function show($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['is_read' => true]);
        return view('backEnd.contact_message.show', compact('message'));
    }

    public function destroy($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->delete();
        Toastr::success('Success', 'Message deleted successfully');
        return redirect()->route('contact-message.index');
    }
}
