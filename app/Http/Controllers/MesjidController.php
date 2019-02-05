<?php

namespace App\Http\Controllers;
use App\Mesjid;
use Illuminate\Http\Request;

class MesjidController extends Controller
{
    public function index() {
        $data['mesjid'] = Mesjid::all();

        return view('admin.index', $data);
    }
}
