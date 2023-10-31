<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\ContactInterface;
use App\Http\Requests\EndUser\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    private $contactInterface;
    public function __construct(ContactInterface $contact)
    {
       $this->contactInterface=$contact;
    }
    public function create()
    {
      return $this->contactInterface->create();
    }
    public function store(ContactRequest $request)
    {
        return $this->contactInterface->store($request);
    }
    public function index()
    {
      return $this->contactInterface->index();
    }
    public function delete( Contact $contact)
    {
        return $this->contactInterface->delete($contact);
    }
}
