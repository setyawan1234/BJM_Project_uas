<?php

namespace App\Http\Controllers;

use App\Models\penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penyakit.index',[
            'penyakits'=> penyakit::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penyakit.create',[
            'penyakits'=> penyakit::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cek=$request->validate([
            'kd_penyakit' => 'required',
            'penyakit' => 'required',
            'definisi' => 'required',
            'solusi' => 'required'

            ]);
            penyakit::create($cek);
            return redirect('/datapenyakit')
            ->with('success', 'penyakit berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cek=penyakit::where('id', $id)->first();
        return view('penyakit.detail', [
            'penyakits' => $cek,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cek=penyakit::where('id', $id)->first();
        return view('penyakit.edit', [
            'penyakits' => $cek,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules = [
            'kd_penyakit' => 'required',
            'penyakit' => 'required',
            'definisi' => 'required',
            'solusi' => 'required'
 
        ];

        $validatedata = $request->validate($rules);

        penyakit::where('id', $id)->update($validatedata);


        return redirect('/datapenyakit')->with('toast_success', 'penyakit berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        penyakit::destroy($id);
        return redirect('/datapenyakit')->with('toast_success', 'penyakit berhasil di hapus!');
    }
}
