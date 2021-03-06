<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('welcome')->with('success', 'Message sent');
    }

    protected function all()
    {
        $contact = Contact::orderBy('created_at')->paginate(2);
        return view('all', compact('contact'));
    }

    protected function detail($id)
    {
        $contact = new Contact();
        return view('detail', ['data'=>$contact->find($id)]);
    }

    protected function update($id)
    {
        $contact = new Contact();
        return view('update', ['data'=>$contact->find($id)]);
    }

    public function updateSubmit($id, ContactRequest $request)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('ticket-detail', $id)->with('success', 'Updated');
    }

    protected function delete($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('ticket-all')->with('success', 'Deleted');
    }

}
