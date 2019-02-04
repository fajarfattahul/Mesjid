<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesjidController extends Controller
{
    public function index() {
        return view('partial.index');
    }
}
