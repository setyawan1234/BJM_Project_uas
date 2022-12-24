<?php

namespace App\Http\Controllers;

use App\Models\DataCustomer;
use App\Models\DataSparepart;
use App\Models\DataKategori;
use App\Models\User;
use App\Models\DataService;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        return view('index',[
            'jumlah_customer'=> User::where('level', 'user') ->count(),
            'jumlah_pegawai' => User::where('level', 'Admin') ->count(),
            'jumlah_sparepart' => DataSparepart::count(),
            'jumlah_servis' => DataService::count(),
        ]);
    }
}
