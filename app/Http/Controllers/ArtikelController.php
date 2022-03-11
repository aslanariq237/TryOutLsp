<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artikel::all();
        return view('artikel', ["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Artikel::create([
            'kategori_id' => $request->kategori_id,
            'judul_kategori' => $request->judul_kategori,
            'isi_artikel' => $request->isi_artikel,
            'gambar_artikel' => $request->gambar_artikel,
        ]);

        return redirect()->route('artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Artikel::where('id', $id)->first();
        if ($data) {
            return view('editartikel', ["data"=>$data]);
        } else {
            return abort("404");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Artikel::where('id', $id)->first();
        if ($data) {
            $data->kategori_id = $request->kategori_id;
            $data->judul_kategori = $request->judul_kategori;
            $data->isi_artikel = $request->isi_artikel;
            $data->gambar_artikel = $request->gambar_artikel;
            $result = $data->save();
            if ($data) {
                return redirect()->route('artikel');
            } else {
                return abort("404");
            }
            
        } else {
            return abort("404");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Artikel::where('id', $id)->first();
        if ($data) {
            if ($data->delete()) {
                return redirect()->route('artikel');
            } else {
                return abort("404");
            } 
        } else {
            return abort("404");
        }
    }

    public function isi()
    {
        $data = Artikel::all();
        return view('isidashboard', ["data"=>$data]);
    }
}
