<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function index()
    {
        return view('layouts.projects', [
            'title' => 'Projects'
        ]);
    }
}
