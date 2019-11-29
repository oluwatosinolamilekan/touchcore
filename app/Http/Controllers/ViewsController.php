<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        return view('partials.content');
    }

    public function login()
    {
       return view('auth.login');
    }

    public function flights()
    {
        return view('flights.index');
    }
}
