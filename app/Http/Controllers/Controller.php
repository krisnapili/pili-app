<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    // I made a function that will show a welcome message
    public function showView()
    {
        return view('sample'); // it will load resources/views/sample.blade.php
    }
}
