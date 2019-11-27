<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Kategori;
use Alert;

class KategoriControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $kategori = Kategori::paginate(10);
       return view('backend.kategori.index', compact('kategori'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.kategori.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama' => 'required',
            'slug' => '',     
        ]);
        $kategori = new Kategori;
        $kategori->nama = $request->nama;
        $kategori->slug =Str::slug($request->nama,'-');
        $kategori->save();
        alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $kategori = Kategori::findOrFail($id);
        return view('backend.kategori.edit',compact('kategori'));
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
        $this->validate($request,[
             'nama' => 'required',
             'slug' => '',
        ]);
        $kategori = Kategori::findOrFail($id);
        $kategori->nama = $request->nama;
        $kategori->slug =Str::slug($request->nama,'-');
        $kategori->save();
        alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('kategori.index');
    }
}
