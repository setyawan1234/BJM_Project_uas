<?php

namespace App\Http\Controllers;

use App\Models\indikatorbobot;
use Illuminate\Http\Request;

class IndikatorbobotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('indikatorbobot.index',[
            'indikatorbobots'=>indikatorbobot::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('indikatorbobot.create',[
            'indikatorbobots'=> indikatorbobot::all()
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
            'nama_indikator' => 'required',
            'nilai_bobot' => 'required',

            ]);
            indikatorbobot::create($cek);
            return redirect('/indikatorbobot')
            ->with('success', 'Bobot berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\indikatorbobot  $indikatorbobot
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $cek=indikatorbobot::where('id', $id)->first();
        return view('indikatorbobot.detail', [
            'indikatorbobots' => $cek,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\indikatorbobot  $indikatorbobot
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $cek=indikatorbobot::where('id', $id)->first();
        return view('indikatorbobot.edit', [
            'indikatorbobots' => $cek,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\indikatorbobot  $indikatorbobot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules = [
            'nama_indikator' => 'required',
            'nilai_bobot' => 'required',
 
        ];

        $validatedata = $request->validate($rules);

        indikatorbobot::where('id', $id)->update($validatedata);


        return redirect('/indikatorbobot')->with('toast_success', 'Bobot berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\indikatorbobot  $indikatorbobot
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        indikatorbobot::destroy($id);
        return redirect('/indikatorbobot')->with('toast_success', 'Bobot berhasil di hapus!');

    }
}
