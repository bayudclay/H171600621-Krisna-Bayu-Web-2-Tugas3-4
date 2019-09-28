<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
    	
    	$listKategoriPengumuman=KategoriPengumuman::all(); 

    	return view ('kategori_pengumuman.index',compact('listKategoriPengumuman'));
    	//return view ('kategori_pengumuman.index'->with('data',$listKategoriPengumuman);
    }

    public function show($id) {

    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
    	$KategoriPengumuman=KategoriPengumuman::find($id);
    	
    }
}
