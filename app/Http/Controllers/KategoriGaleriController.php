<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index(){
    	
    	$listKategoriGaleri=KategoriGaleri::all(); 

    	return view ('kategori_galeri.index',compact('listKategoriGaleri'));
    	//return view ('kategori_pengumuman.index'->with('data',$listKategoriPengumuman);
    }

    public function show($id) {

    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
    	$KategoriPengumuman=KategoriPengumuman::find($id);
    	
    }
}

