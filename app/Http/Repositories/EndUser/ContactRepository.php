<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\ContactInterface;
use App\Models\Contact;

class ContactRepository implements ContactInterface{
    public function create()
    {
        return view ('EndUser.pages.contact');
    }
    public function store($request)
    {
        Contact::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'subject'=>$request->subject,
           'message'=>$request->message,
        ]);
        toast('Done','success');
        return redirect()->route('endUser.index');

    }
    public function index()
    {
        $contacts=Contact::get();
        return view('Admin.Pages.Contact.index',compact('contacts'));
    }
    public function delete( $contact)
    {
        $contact->delete();
        toast('Contact Deleted Successfully','success');
        return back();
    }
}


 ?>
