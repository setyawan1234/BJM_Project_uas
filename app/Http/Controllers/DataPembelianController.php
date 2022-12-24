<?php

namespace App\Http\Controllers;

use App\Models\DataSparepart;
use App\Models\DataPembelian;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use DB;
use PDF;

class DataPembelianController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian = DataPembelian::simplePaginate(20);

        return view('pembelian.index',compact('pembelian'));
        // $tanggal = DataPembelian::all();
        // if (request('search')) {
        //     $tanggal->where('tanggal', 'like', '%' . request('search') . '%');
        // }
        // return view('pembelian.index', [
        //     'pembelian' => $tanggal,
        // ]);
    }
    public function filter(Request $request)
    {
        $pembelian = DataPembelian::query();

        $date = $request->tanggal;

        if ($date) {
            $pembelian->where('tanggal','LIKE','%'.$date.'%');
        }

        $data = [
            'tanggal' => $date,
            'pembelian' => $pembelian->simplePaginate(20),
        ];

        return view('pembelian.index',$data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian.create',[
            'pembelian'=> DataPembelian::all(), 'data_spareparts'=> DataSparepart::all(),'users'=> User::all()
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
        $request->validate([
            'user_id' => 'required',
            'sparepart_id' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
            ]);
            $DataSparepart = DataSparepart::find($request->sparepart_id);

            $data = [
                // 'customer_id' => $request->customer_id,
                'user_id' => 'required',
                'sparepart_id' => 'required',
                'jumlah' => $request->jumlah,
                'tanggal' => $request->tanggal,
                'user_id' => $request->user_id,
                'sparepart_id' => $request->sparepart_id,
                'hargaSparepart' => @(int)$DataSparepart->harga,
                'total_harga'=> @(int)$DataSparepart->harga * @(int)$request->jumlah,
            ];

            DataPembelian::create($data);
            $DataSparepart = DataSparepart::find($request->sparepart_id);
            $stok = $DataSparepart->stok + $request->jumlah;
            DataSparepart::where('id', $request->sparepart_id)->update(['stok' => $stok]);
            Alert::success('Pembelian', 'Data Pembelian Ditambahkan');
            return redirect('/pembelian');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=DataPembelian::where('id', $id)->first();
        return view('pembelian.detail', [
            'pembelian' => $data, 'data_spareparts'=> DataSparepart::all()
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
        $data=DataPembelian::where('id', $id)->first();
        return view('pembelian.edit', [
            'pembelian' => $data,  'data_spareparts'=> DataSparepart::all()
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
            'user_id' => 'required',
            'sparepart_id' => 'required',
            'hargaSparepart' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'total' => 'required',

        ];

        $DataPembelian =DataPembelian::where('id', $id)->first();

        $DataSparepart =DataSparepart::where('id', $request->sparepart_id)->first();
        $stok = $DataSparepart->stok - $DataPembelian->jumlah;
        DataSparepart::where('id', $request->sparepart_id)->update(['stok' => $stok]);

        $validatedata = $request->validate($rules);
        DataPembelian::where('id', $id)->update($validatedata);
        $DataSparepart = DataSparepart::find($request->sparepart_id);
        $stok = $DataSparepart->stok + $request->jumlah;
        DataSparepart::where('id', $request->sparepart_id)->update(['stok' => $stok]);
        Alert::success('Pembelian', 'Data Pembelian Diupdate');

        return redirect('/pembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DataPembelian =DataPembelian::where('id', $id)->first();

        $DataSparepart =DataSparepart::where('id', $DataPembelian->sparepart_id)->first();
        $stok = $DataSparepart->stok - $DataPembelian->jumlah;
        DataSparepart::where('id', $DataPembelian->sparepart_id)->update(['stok' => $stok]);
        DataPembelian::destroy($id);
        Alert::success('Pembelian', 'Data Pembelian Dihapus');
        return redirect('/pembelian');
    }


    // public function cetakForm(){
    //     return view('pembelian.cetak-pegawai-form');
    // }
}
