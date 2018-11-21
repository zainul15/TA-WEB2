<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPoltekes;

class poltekes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelPoltekes::all();
		return view('poltekes',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poltekes_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		$data = new ModelPoltekes();
		$data->a = $request->a;
		$data->b = $request->b;
		$data->c = $request->c;
		$data->d = $request->d;
		$data->e = $request->e;
		$data->f = $request->f;
		$data->save();
		return redirect()->route('poltekes.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelPoltekes::where('id',$id)->get();
		return view('poltekes_edit', compact('data'));
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
        $data = ModelPoltekes::where('id',$id)->first();
		$data->a = $request->a;
		$data->b= $request->b;
		$data->c = $request->c;
		$data->d = $request->d;
		$data->f = $request->f;
		$data->save();
		return redirect()->route('poltekes.index')->with('alert-success','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = ModelPoltekes::where('id',$id)->first();
		$data->delete();
		return redirect()->route('poltekes.index')->with('alert-success','Data Berhasil Dihapus!');
    }
}
