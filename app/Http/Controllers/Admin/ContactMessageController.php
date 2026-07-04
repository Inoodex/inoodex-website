<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:30',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        ContactMessage::create($request->all());

        return back()->with('success', 'Thank you for contacting us. We will get back to you soon!');
    }
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(10);
        return view('admin.messages.index', compact('messages'));
    }

    public function show($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['is_read' => true]);
        return view('admin.messages.show', compact('message'));
    }

    // Delete message
    public function destroy($id)
    {
        ContactMessage::findOrFail($id)->delete();
        return back()->with('success', 'Message deleted successfully.');
    }
}