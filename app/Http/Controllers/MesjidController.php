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

    public function pecarian(Request $mes) {
        $data['mesjid'] = Mesjid::where('nama', 'LIKE', '%'.$mes->mesjid.'%')->where('Kabupaten', 'LIKE', '%'.$mes->lokasi.'%')->paginate(12);

        return view('admin.index', $data);
    }
}
