<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($nama='default'){
        return view('hello.hello')->with('nama',$nama);
    }

    public function show(){
        return view('hello.tampil');
    }

    public function HitungLuas(Request $request){
        $alas = $request->get('alas');
        $tinggi = $request->get('tinggi');
        $hasil = $alas*$tinggi*0.5;
        //return $alas." ".$tinggi." ".$hasil;
        return view('hello.tampil')->with('hasil',$hasil);
    }
}
