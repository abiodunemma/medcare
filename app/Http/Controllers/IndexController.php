<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
public function index()
    {
        return view('doctor');
    }
    public function details()
    {
        return view('details');
    }
}
