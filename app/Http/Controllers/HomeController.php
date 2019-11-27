<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
Use App\Produk;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori  = Kategori::get();
        $produk =Produk::get();
        return view('home',compact('kategori','produk'));
    }
}
