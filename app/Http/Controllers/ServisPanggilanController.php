<?php

namespace App\Http\Controllers;

use App\Models\DataSparepart;
use App\Models\ServisPanggilan;
use App\Models\DataService;
// use App\Models\DataCustomer;
use App\Models\DataTransaksi;
use App\models\RincianBiaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServisPanggilanController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index(){
            return view('servispanggilan');
        }
    
        public function create()
        {
            return view('servispanggilan',[
                'servis_panggilan'=> ServisPanggilan::all()
            ]);
        }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
            'nope' => 'required',
            'lokasi' => 'required',
            

            ]);

            ServisPanggilan::create($cek);

            return redirect('https://api.whatsapp.com/send?phone=6285707569129&text=Saya%20ingin%20menyervis%20mobil%20saya%20di%20bengkel%20anda')
            ->with('success', ' '); 
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
        return view('servispanggilan', [
            'servispanggilan' => $cek,
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
