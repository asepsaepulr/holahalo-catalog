<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Kategori;
use App\Produk;
use File;
use Image;
use Alert;

class ProdukControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::with('Kategori')->get();
        return view('backend.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $kategori = Kategori::all();
       return view('backend.produk.create', compact('kategori'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'id_kategori' => 'required|max:255',
            'nama'=>'required|unique:produks',
            'deskripsi'=>'required|max:2000',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $produk = new Produk;
        $produk->id_kategori = $request->id_kategori;
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi; 
        $produk->foto = $request->foto;
        $produk->slug = Str::slug($request->nama, '-');

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = Str::slug($request->nama).'_'.uniqid().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/produk');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $produk->foto = $name;
        }
        $produk->save();
        alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('backend.produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();
        $selectedkategori = Produk::findOrFail($id)->id_kategori;
        return view('backend.produk.edit',compact('produk','kategori','selectedkategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $this->validate($request, [
        'id_kategori' => 'required',
        'nama' => 'required|max:255',
        'deskripsi' => 'required|max:2000',
        'foto' => ''
    ]);
     $produk = Produk::findOrFail($id);
     $produk->id_kategori = $request->id_kategori;
     $produk->nama = $request->nama;
     $produk->deskripsi = $request->deskripsi;
     $produk->slug =Str::slug($request->nama, '-');

     if ($request->hasFile('foto')) {
        $image = $request->file('foto');
        $name = Str::slug($request->nama).'_'.uniqid().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/produk');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);


        // hapus gambar lama, jika ada
        if ($produk->foto) {
            $old_foto = $produk->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/uploads/produk'
            . DIRECTORY_SEPARATOR . $produk->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $produk->foto = $name;
    }
    $produk->save();
    alert()->success('Berhasil.','Data telah diubah!');
    return redirect()->route('produk.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        if ($produk->foto) {
            $old_foto = $produk->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . '/uploads/produk'
            . DIRECTORY_SEPARATOR . $produk->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
        }
        $produk->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('produk.index');
    }
}
