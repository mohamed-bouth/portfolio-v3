<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->paginate(10);

        return view('messages.index', compact('messages'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()
            ->route('messages.index')
            ->with('success', 'Message deleted successfully.');
    }

    public function destroyAll()
    {
        Contact::query()->delete();

        return redirect()
            ->route('messages.index')
            ->with('success', 'All messages deleted successfully.');
    }
}