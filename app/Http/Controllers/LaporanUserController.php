<?php

namespace App\Http\Controllers;

use App\Models\DataTransaksi;
use Illuminate\Http\Request;
use App\Models\RincianBiaya;
use PDF;

class LaporanUserController extends Controller
{
    public function index()
    {
        return view('laporanUser.index');
    }

    public function cetak(Request $request)
    {
        if($request->tipe == 'rincianbiaya'){
            $rincianbiaya = RincianBiaya::all();

            $pdf = PDF::loadview('laporanUser.rincianbiaya',['rincianbiaya'=>$rincianbiaya]);
            return $pdf->stream('laporan-rincianbiaya.pdf');
        }
        else {
            $transaksi = DataTransaksi::all();

            $pdf = PDF::loadview('laporan.transaksi',['transaksi'=>$transaksi]);
            return $pdf->stream('laporan-transaksi.pdf');
        }
    }
}
