<?php

namespace App\Http\Controllers;
use App\Models\DataService;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('indexuser',['service'=> DataService::paginate(50)]);
    }
    public function show($id)
    {
        $cek=DataService::where('id', $id)->first();
        return view('indexuser', [
            'service' => $cek,
        ]);
    }
}
