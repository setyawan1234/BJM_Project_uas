<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataCustomerController;
use App\Http\Controllers\DataSparepartController;
use App\Http\Controllers\DataServiceController;
use App\Http\Controllers\DataPembelianController;
use App\Http\Controllers\DataTransaksiController;
use App\Http\Controllers\RincianBiayaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServisPanggilanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\IndikatorbobotController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RulediagnosaController;
use App\Http\Controllers\LaporanUserController;
use App\Models\RincianBiaya;
use App\Models\rulediagnosa;
use GuzzleHttp\Middleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
// Route::resource('/datacustomer', DataCustomerController::class)->middleware('auth', 'isAdmin');
// Route::resource('/datapegawai', UserController::class)->middleware('auth');

Route::get('/dashboarduser',[App\Http\Controllers\DashboardUserController::class,'index'])->middleware('auth')->name('indexuser');
Route::resource('/rincianbiaya', RincianBiayaController::class);
Route::resource('/datasparepart', DataSparepartController::class);
Route::resource('/dataservice', DataServiceController::class);
Route::resource('/servispanggilan', ServisPanggilanController::class);
Route::get('rincian-filter',[RincianBiayaController::class,'filter']);
Route::get('/laporanUser', [LaporanUserController::class,'index'])->middleware('auth')->name('laporanUser');
Route::post('/laporanUser/cetak', [LaporanUserController::class,'cetak'])->middleware('auth');
// Route::get('/cetak-pembelian-form', [DataPembelianController::class])->name('cetak-pembelian-form');

Route::middleware(['isAdmin', 'auth'])->group(function(){
    Route::resource('/datacustomer', DataCustomerController::class);
    Route::resource('/datapegawai', UserController::class);
    Route::resource('/dashboard',DashboardController::class);
    Route::resource('/dataservice', DataServiceController::class);
    Route::resource('/service', DataServiceController::class);
    Route::resource('/pembelian', DataPembelianController::class);
    Route::get('pembelian-filter',[DataPembelianController::class,'filter']);
    Route::resource('/datasparepart', DataSparepartController::class);
    Route::resource('/datagejala',GejalaController::class);
    Route::resource('/datapenyakit',PenyakitController::class);
    Route::resource('/indikatorbobot',IndikatorbobotController::class);
    Route::resource('/rulediagnosa',RulediagnosaController::class);
    Route::resource('/diagnosa',RulediagnosaController::class);
    // Route::get('/laporan', [LaporanController::class,'index']);
    Route::get('/laporan', [LaporanController::class,'index']);
    Route::post('/laporan/cetak', [LaporanController::class,'cetak']);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/AboutUs', [App\Http\Controllers\AboutUsController::class, 'index'])->name('AboutUs');
Route::get('/Contact', [App\Http\Controllers\ContactController::class, 'index'])->name('Contact');
//cloud
Route::get('/mig', function()
{
    // Call and Artisan command from within your application.
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
});

Route::get('/cc', function()
{
    // Call and Artisan command from within your application.
    Artisan::call('config:clear');
});

// Route::get('/home',[\App\Http\Controllers\LandingController::class,'index'])->name('welcome')
