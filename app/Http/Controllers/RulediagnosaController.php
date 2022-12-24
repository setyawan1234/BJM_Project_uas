<?php

namespace App\Http\Controllers;

// use App\Models\rulediagnosa;

use App\Models\gejala;
use App\Models\indikatorbobot;
use App\Models\penyakit;
use App\Models\rulediagnosa;
use Illuminate\Http\Request;

class RulediagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('diagnosa.index',[
            'rulediagnosas'=> rulediagnosa::paginate(4)
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
        return view('diagnosa.create',[
            'rulediagnosas'=> rulediagnosa::all(), 'penyakits'=> penyakit::all(),  'gejalas'=> gejala::all(), 'indikatorbobots' => indikatorbobot::all(),
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
            penyakit::find($request->penyakits_id);
            gejala::find($request->gejalas_id);
            indikatorbobot::find($request->indikatorbobots_id);
            $data = [
                'penyakits_id' => $request->penyakits_id,
                'gejalas_id' => $request->gejalas_id,
                'indikatorbobots_id' => $request->indikatorbobots_id,
            ];
            rulediagnosa::create($data);

            return redirect('/rulediagnosa')
            ->with('success', 'Rincian Biaya Berhasil Ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rulediagnosa  $rulediagnosa
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $cek=rulediagnosa::where('id', $id)->first();
        return view('diagnosa.detail', [
            'rulediagnosas' => $cek,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rulediagnosa  $rulediagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $cek=rulediagnosa::where('id', $id)->first();
        return view('diagnosa.edit', [
            'rulediagnosas' => $cek, 'penyakits'=> penyakit::all(),  'gejalas'=> gejala::all(), 'indikatorbobots' => indikatorbobot::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rulediagnosa  $rulediagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $rules = [
            'penyakits_id' => 'required',
            'gejalas_id' => 'required',
            'indikatorbobots_id' => 'required',
 
        ];

        $request->validate($rules);

        $data = [
            'penyakits_id' => $request->penyakits_id,
            'gejalas_id' => $request->gejalas_id,
            'indikatorbobots_id' => $request->indikatorbobots_id,
        ];

        rulediagnosa::where('id', $id)->update($data);


        return redirect('/rulediagnosa')->with('toast_success', 'rincianbiaya berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rulediagnosa  $rulediagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        rulediagnosa::destroy($id);
        return redirect('/rulediagnosa')->with('toast_success', 'rincianbiaya berhasil di hapus!');
    }
}
