<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokController extends Controller
{
    public function list() {
        $hasil = DB::select('select * from stok');
        return view('list-stok', [ 'data' => $hasil ]);
    }

    public function simpan(Request $req) {
        DB::insert('insert into stok(merk,tipe,harga) values(?,?,?)', [ 
            $req->merk, $req->tipe, $req->harga
        ]);

        $hasil = DB::select('select * from stok');
        return view('list-stok', [ 'data' => $hasil ]);
    }
}
