<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        // Mengambil semua data mobil
        $data['mobils'] = Mobil::all();
        return view('mobils.index', $data);
    }

    public function create()
    {
        // Menampilkan halaman form tambah mobil
        return view('mobils.create');
    }
}