<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        return view('layouts.contact', [
            'title' => 'Contact Me'
        ]);
    }
}
