<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function view($page = 'home')
    {
        // ...
    }
}