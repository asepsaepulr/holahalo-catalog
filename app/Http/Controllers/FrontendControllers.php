<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Produk;

class FrontendControllers extends Controller
{
     public function index(){
       $produks= Produk::orderBy('created_at','desc')->paginate(3);
       return view('index',compact('produks'));
   }
      public function produks(){
        $produks = Produk::orderBy('created_at','desc')->paginate(4);
        return view('frontend.produk', compact('produks'));
    }

      public function produkdetails(Produk $produks){  
        $kategori = Kategori::all();
        return view('frontend.produkdetails',compact('produks','kategori'));
    }
     public function filter($id)
    {
        $produks = Produk::where('id_kategori','=',$id)->orderBy('created_at','desc')->get();
        $kategori = Kategori::all();
        return view('frontend.kategori', compact('produks','kategori'));
    }
}
