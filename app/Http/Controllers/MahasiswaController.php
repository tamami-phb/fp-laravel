<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{

    public function index() {
        $isiData = Mahasiswa::all();
        return view('daftar-mahasiswa', [ 'isiData' => $isiData ]);
    }

    public function save(Request $data) {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $data->nim;
        $mahasiswa->nama = $data->nama;
        $mahasiswa->kelas = $data->kelas;
        $mahasiswa->save();

        $isiData = Mahasiswa::all();
        return view('daftar-mahasiswa', [ 'isiData' => $isiData ]);
    }
}
