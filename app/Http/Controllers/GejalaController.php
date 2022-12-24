<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gejala.index',[
            'gejalas'=> gejala::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gejala.create',[
            'gejalas'=> gejala::all()
        ]);
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
        //
        $cek=$request->validate([
            'kd_gejala' => 'required',
            'gejala' => 'required',

            ]);
            gejala::create($cek);
            return redirect('/datagejala')
            ->with('success', 'Gejala berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cek=gejala::where('id', $id)->first();
        return view('gejala.detail', [
            'gejalas' => $cek,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cek=gejala::where('id', $id)->first();
        return view('gejala.edit', [
            'gejalas' => $cek,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules = [
            'kd_gejala' => 'required',
            'gejala' => 'required',
 
        ];

        $validatedata = $request->validate($rules);

        gejala::where('id', $id)->update($validatedata);


        return redirect('/datagejala')->with('toast_success', 'Gejala berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        gejala::destroy($id);
        return redirect('/datagejala')->with('toast_success', 'Gejala berhasil di hapus!');
    }
}
