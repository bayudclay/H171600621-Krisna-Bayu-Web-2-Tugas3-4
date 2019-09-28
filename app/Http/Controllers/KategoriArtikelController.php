<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
    	
    	$listKategoriArtikel=KategoriArtikel::all(); 

    	return view ('kategori_artikel.index',compact('listKategoriArtikel'));
    	//return view ('kategori_artikel.index'->with('data',$listKategoriArtikel);
    }

    public function show($id) {

    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
    	$KategoriArtikel=KategoriArtikel::find($id);
    	
    }
}
