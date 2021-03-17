<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log; // untuk mencatatkan log

class UserController extends Controller
{
    public function index() {
        // Cara nulis data ke log file
        Log::info('ada yang akses UserController.index');
        $data->name = 'tamami';
        return view('user', [ 'users' => [ $data ]]);
    }

    public function bio($nim, $name, $class) {

        return view('bio', [
            'nim' => $nim,
            'name' => $name, 
            'class' => $class
        ]);
    }

    public function bioPost(Request $data) {
        //return $data->all();
        return view('bio', [
            'nim' => $data['nim'], 
            'name' => $data['name'], 
            'class' => $data['class']
        ]);
    }

    public function getUser() {
        $users = DB::select('select * from users');
        return view('user', [ 
            'users' => $users
        ]);
    }
}
