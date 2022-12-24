<?php

namespace App\Http\Controllers;

use App\Models\DataSparepart;
use App\Models\DataService;
// use App\Models\DataCustomer;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\DataTransaksi;
use App\models\RincianBiaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RincianBiayaController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rincianbiaya = RincianBiaya::simplePaginate(20);

        return view('rincianbiaya.index',compact('rincianbiaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rincianbiaya.create',[
            'rincianbiaya'=> RincianBiaya::all(), 'data_spareparts'=> DataSparepart::all(),  'service'=> DataService::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cek=$request->validate([
            // 'customer_id' => 'required',
            'service_id' => 'required',
            'sparepart_id' => 'required',
            'tanggal' => 'required',

            ]);
            $DataSparepart = DataSparepart::find($request->sparepart_id);
            $DataService = DataService::find($request->service_id);
            $data = [
                'tanggal' => $request->tanggal,
                // 'customer_id' => $request->customer_id,
                'service_id' => $request->service_id,
                'sparepart_id' => $request->sparepart_id,
                'biaya' => @(int)$DataSparepart->harga+@(int)$DataService->biaya,
                'hargaSparepart' => @(int)$DataSparepart->harga,
                'biayaService' => (int)$DataService->biaya,
            ];
            RincianBiaya::create($data);
            Alert::success('Rincian Biaya', 'Rincian Biaya Berhasil Ditambahkan');

            return redirect('/rincianbiaya');
    }

    public function filter(Request $request)
    {
        $rincianbiaya = RincianBiaya::query();

        $date = $request->tanggal;

        if ($date) {
            $rincianbiaya->where('tanggal','LIKE','%'.$date.'%');
        }

        $data = [
            'tanggal' => $date,
            'rincianbiaya' => $rincianbiaya->simplePaginate(20),
        ];

        return view('rincianbiaya.index',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cek=RincianBiaya::where('id', $id)->first();
        return view('rincianbiaya.detail', [
            'rincianbiaya' => $cek,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cek=RincianBiaya::where('id', $id)->first();
        return view('rincianbiaya.edit', [
            'rincianbiaya' => $cek, 'data_spareparts'=> DataSparepart::all(),'service'=> DataService::all(),
        ]);
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
        $rules = [
            // 'customer_id' => 'required',
            'service_id' => 'required',
            'sparepart_id' => 'required',
            'tanggal' => 'required',
            // 'biaya' => 'required',

        ];

        $validatedata = $request->validate($rules);

        $DataSparepart = DataSparepart::find($request->sparepart_id);
            $DataService = DataService::find($request->service_id);
            $data = [
                'tanggal' => $request->tanggal,
                // 'customer_id' => $request->customer_id,
                'service_id' => $request->service_id,
                'sparepart_id' => $request->sparepart_id,
                'biaya' => (int)$DataSparepart->harga+(int)$DataService->biaya,
                'hargaSparepart' => (int)$DataSparepart->harga,
                'biayaService' => (int)$DataService->biaya,
            ];

        RincianBiaya::where('id', $id)->update($data);
        Alert::success('Rincian Biaya', 'Rincian Biaya Berhasil di Edit!');


        return redirect('/rincianbiaya')->with('toast_success', 'rincianbiaya berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RincianBiaya::destroy($id);
        Alert::success('Rincian Biaya', 'Rincian Biaya Berhasil di Hapus!');

        return redirect('/rincianbiaya')->with('toast_success', 'rincianbiaya berhasil di hapus!');
    }


}
