<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPtsAdmin;

class Pts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelPtsAdmin::all();
		return view('pts', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pts_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelPtsAdmin();
		$data->instansi = $request->instansi;
		$data->jalur = $request->jalur;
		$data->biaya = $request->biaya;
		$data->registrasi = $request->registrasi;
        $data->tes = $request->tes;
        $data->pengumuman = $request->pengumuman;		
        $data->daftarulang = $request->daftarulang;		
		$data->save();
		return redirect()->route('pts.index')->with('alert-success','Berhasil Menambahkan Data!');

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
        $data = ModelPtsAdmin::where('id',$id)->get();
		return view('pts_edit', compact('data'));
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
        $data = ModelPtsAdmin::where('id',$id)->first();
		$data->instansi = $request->instansi;
		$data->jalur = $request->jalur;
		$data->biaya = $request->biaya;
		$data->registrasi = $request->registrasi;
        $data->tes = $request->tes;
        $data->pengumuman = $request->pengumuman;		
        $data->daftarulang = $request->daftarulang;		
		$data->save();
		return redirect()->route('pts.index')->with('alert-success','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelPtsAdmin::where('id',$id)->first();
		$data->delete();
		return redirect()->route('pts.index')->with('alert-success','Data Berhasil Dihapus!');
    }
}
