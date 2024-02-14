<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;


class Presentation extends Controller
{
    public function about()
    {
        return view('presentation');
    }
}
