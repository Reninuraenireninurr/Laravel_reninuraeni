<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Kategori;
=======
>>>>>>> 548bd0b1cd8c255c9947a32b0adb113a82e19bd0

class KategoriController extends Controller
{
    public function daftar(Request $req)
    {
<<<<<<< HEAD
    	$data = Kategori::where('nama_kategori','like',"%{$req->keyword}%")->paginate(10);

    	return view('admin.pages.kategori.daftar',['data'=>$data]);
    }
    public function add()
    {
    	return view('admin.pages.kategori.add');
    }
    public function save(Request $req)
    {
    	return 'Fungsi Save';
=======
    	return view('admin.pages.kategori.daftar');
>>>>>>> 548bd0b1cd8c255c9947a32b0adb113a82e19bd0
    }
}
