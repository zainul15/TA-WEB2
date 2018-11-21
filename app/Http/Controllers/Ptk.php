<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPtk;

class Ptk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = ModelPtk::all();
		return view('ptk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('ptk_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new ModelPtk();
		$data->namainstansi = $request->namainstansi;
		$data->pendaftaran = $request->pendaftaran;
		$data->ujian = $request->ujian;
		$data->wawancara = $request->wawancara;
		$data->pengumuman = $request->pengumuman;
		$data->kuota = $request->kuota;
		$data->save();
		return redirect()->route('ptk.index')->with('alert-success','Berhasil Menambahkan Data!');
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
         $data = ModelPtk::where('id',$id)->get();
		return view('ptk_edit', compact('data'));
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
         $data = ModelPtk::where('id',$id)->first();
		$data->namainstansi = $request->namainstansi;
		$data->pendaftaran= $request->pendaftaran;
		$data->ujian = $request->ujian;
		$data->wawancara = $request->wawancara;
		$data->pengumuman = $request->pengumuman;
		$data->kuota = $request->kuota;
		$data->save();
		return redirect()->route('ptk.index')->with('alert-success','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = ModelPtk::where('id',$id)->first();
		$data->delete();
		return redirect()->route('ptk.index')->with('alert-success','Data Berhasil Dihapus!');
    }
}
