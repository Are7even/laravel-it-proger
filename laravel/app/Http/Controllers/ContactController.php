<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){

//        $validation = $req->validate([
//           'email' => 'required|min:5|max:30',
//           'name' => 'required|min:10|max:50',
//        ]);



        dd($req->input('email'));
    }
}
