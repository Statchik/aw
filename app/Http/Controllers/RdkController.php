<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RdkController extends Controller
{
    public function rdk ()
    {
        return view ('rdk');
    }
}
