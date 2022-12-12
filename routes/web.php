<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TablesiswaController;
use App\Http\Controllers\TableguruController;
use App\Http\Controllers\TablekelasController;
use App\Http\Controllers\TabledatapelanggaranController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\FormsiswaController;
use App\Http\Controllers\FormguruController;
use App\Http\Controllers\FormpelanggaranController;
use App\Http\Controllers\SiswapelanggaraController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('admin.coba');
// });

// Route::get('/coba', [CobaController::class, 'coba']);
// Route::get('/', [IndexController::class, 'index']);
// Route::get('/index', [IndexController::class, 'index']);



// INI ROUTE INDEX ATAU SISWA PELANGGARAN
Route::get('/', [SiswapelanggaraController::class, 'getSiswa']);
Route::get('/index', [SiswapelanggaraController::class, 'getSiswa']);
Route::get('/formpelanggaransiswa', [SiswapelanggaraController::class, 'create'])->name('formpelanggaransiswa');
Route::post('/simpanformpelanggaransiswa', [SiswapelanggaraController::class, 'store'])->name('simpanformpelanggaransiswa');
Route::get("/editformpelanggaransiswa/{id}", [SiswapelanggaraController::class, "edit"])->name('editformpelanggaransiswa');
Route::get("/deleteformpelanggaransiswa/{id}", [SiswapelanggaraController::class, "destroy"])->name('deleteformpelanggaransiswa');
Route::get("/updateformpelanggaransiswa/{id}", [SiswapelanggaraController::class, "update"])->name('updateformpelanggaransiswa');
Route::get("/detailpelanggaransiswa/{id}", [SiswapelanggaraController::class, "detail"])->name('detailpelanggaransiswa');



// INI ROUTE KELAS
Route::get("/tablekelas", [TablekelasController::class, "index"]);
Route::get("/formkelas", [TablekelasController::class, "create"])->name('formkelas');
Route::post("/simpanformkelas", [TablekelasController::class, "store"])->name('simpanformkelas');
Route::get("/editformkelas/{id}", [TablekelasController::class, "edit"])->name('editformkelas');
Route::get("/deleteformkelas/{id}", [TablekelasController::class, "destroy"])->name('deleteformkelas');
Route::get("/updateformkelas/{id}", [TablekelasController::class, "update"])->name('updateformkelas');
Route::get("/detailkelas/{id}", [TablekelasController::class, "detail"])->name('detailkelas');



// INI ROUTE DATA PELANGGARAN
Route::get("/tabledatapelanggaran", [TabledatapelanggaranController::class, "index"]);
Route::get("/formdatapelanggaran", [TabledatapelanggaranController::class, "create"])->name(('formdatapelanggaran'));
Route::post("/simpanformdatapelanggaran", [TabledatapelanggaranController::class, "store"])->name('simpanformdatapelanggaran');
Route::get("/editformdatapelanggaran/{id}", [TabledatapelanggaranController::class, "edit"])->name('editformdatapelanggaran');
Route::get("/updateformdatapelanggaran/{id}", [TabledatapelanggaranController::class, "update"])->name('updateformdatapelanggaran');
Route::get("/deletedatapelanggaran/{id}", [TabledatapelanggaranController::class, "destroy"])->name('deletedatapelanggaran');



// INI ROUTE GURU
Route::get("/formguru", [FormguruController::class, "formguru"]);
Route::post("/simpanformguru", [TableguruController::class, "store"])->name('simpanformguru');
Route::get("/editformguru/{id}", [TableguruController::class, "edit"])->name('editformguru');
Route::get("/updateformguru/{id}", [TableguruController::class, "update"])->name('updateformguru');
Route::get("/deleteguru/{id}", [TableguruController::class, "destroy"])->name('deleteformguru');
Route::get("/detailguru/{id}", [TableguruController::class, "detail"])->name('detailguru');



// INI ROUTE SISWAA
Route::get("/formsiswa", [TablesiswaController::class, "create"])->name('formpelanggaran');
Route::post("/simpanformsiswa", [TablesiswaController::class, "store"])->name('simpanformsiswa');
Route::get("/editformsiswa/{id}", [TablesiswaController::class, "edit"])->name('editformsiswa');
Route::get("/updateformsiswa/{id}", [TablesiswaController::class, "update"])->name('updateformsiswa');
Route::get("/deletesiswa/{id}", [TablesiswaController::class, "destroy"])->name('deletesiswa');
Route::get("/detailsiswa/{id}", [TablesiswaController::class, "detail"])->name('detailsiswa');




Route::get("/tablesiswa", [TablesiswaController::class, "tablesiswa"]);
Route::get("/tableguru", [TableguruController::class, "tableguru"]);
// Route::get("/formpelanggaran", [TablepelanggaranController::class, "crete"])->name('formpelanggaran');



