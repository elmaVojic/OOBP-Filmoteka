<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FilmoviController;
use App\Http\Controllers\GlumciController;
use App\Http\Controllers\RedateljiController;
use App\Http\Controllers\ZanroviController;
use App\Http\Controllers\NagradeController;
use App\Http\Controllers\StatistikaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//MOJE RUTE 

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

/*
Route::middleware(['auth:sanctum', 'verified'])->get('filmovi', function () {
    return view('filmovi.index');
})->name('filmovi'); 

Route::middleware(['auth:sanctum', 'verified'])->get('glumci', function () {
    return view('glumci.index');
})->name('glumci');

Route::middleware(['auth:sanctum', 'verified'])->get('redatelji', function () {
    return view('redatelji.index');
})->name('redatelji');

Route::middleware(['auth:sanctum', 'verified'])->get('zanrovi', function () {
    return view('zanrovi.index');
})->name('zanrovi'); */

Route::middleware(['auth:sanctum', 'verified'])->get('statistika', function () {
    return view('statistika.index');
})->name('statistika');

Route::middleware(['auth:sanctum', 'verified'])->get('filmovi', [FilmoviController::class, 'index'])->name('filmovi');
Route::middleware(['auth:sanctum', 'verified'])->get('dodaj_film', [FilmoviController::class, 'create'])->name('dodaj_film');
Route::middleware(['auth:sanctum', 'verified'])->post('store_film', [FilmoviController::class, 'store'])->name('store_film');
Route::middleware(['auth:sanctum', 'verified'])->post('obrisi_film', [FilmoviController::class, 'delete'])->name('obrisi_film');
Route::middleware(['auth:sanctum', 'verified'])->post('uredi_film', [FilmoviController::class, 'edit'])->name('uredi_film');
Route::middleware(['auth:sanctum', 'verified'])->post('update_film', [FilmoviController::class, 'update'])->name('update_film');
Route::middleware(['auth:sanctum', 'verified'])->post('dodajFile', [FilmoviController::class, 'dodajFile'])->name('dodajFile');
Route::middleware(['auth:sanctum', 'verified'])->post('process', [FilmoviController::class, 'process'])->name('process');


Route::middleware(['auth:sanctum', 'verified'])->get('glumci', [GlumciController::class, 'index'])->name('glumci');
Route::middleware(['auth:sanctum', 'verified'])->get('dodaj_glumca', [GlumciController::class, 'create'])->name('dodaj_glumca');
Route::middleware(['auth:sanctum', 'verified'])->post('store_glumca', [GlumciController::class, 'store'])->name('store_glumca');
Route::middleware(['auth:sanctum', 'verified'])->post('obrisi_glumca', [GlumciController::class, 'delete'])->name('obrisi_glumca');
Route::middleware(['auth:sanctum', 'verified'])->post('uredi_glumca', [GlumciController::class, 'edit'])->name('uredi_glumca');
Route::middleware(['auth:sanctum', 'verified'])->post('update_glumca', [GlumciController::class, 'update'])->name('update_glumca');


Route::middleware(['auth:sanctum', 'verified'])->get('redatelji', [RedateljiController::class, 'index'])->name('redatelji');
Route::middleware(['auth:sanctum', 'verified'])->get('dodaj_redatelja', [RedateljiController::class, 'create'])->name('dodaj_redatelja');
Route::middleware(['auth:sanctum', 'verified'])->post('store_redatelja', [RedateljiController::class, 'store'])->name('store_redatelja');
Route::middleware(['auth:sanctum', 'verified'])->post('obrisi_redatelja', [RedateljiController::class, 'delete'])->name('obrisi_redatelja');
Route::middleware(['auth:sanctum', 'verified'])->post('uredi_redatelja', [RedateljiController::class, 'edit'])->name('uredi_redatelja');
Route::middleware(['auth:sanctum', 'verified'])->post('update_redatelja', [RedateljiController::class, 'update'])->name('update_redatelja');


Route::middleware(['auth:sanctum', 'verified'])->get('zanrovi', [ZanroviController::class, 'index'])->name('zanrovi');
Route::middleware(['auth:sanctum', 'verified'])->get('dodaj_zanr', [ZanroviController::class, 'create'])->name('dodaj_zanr');
Route::middleware(['auth:sanctum', 'verified'])->post('store_zanr', [ZanroviController::class, 'store'])->name('store_zanr');
Route::middleware(['auth:sanctum', 'verified'])->post('obrisi_zanr', [ZanroviController::class, 'delete'])->name('obrisi_zanr');
Route::middleware(['auth:sanctum', 'verified'])->post('uredi_zanr', [ZanroviController::class, 'edit'])->name('uredi_zanr');
Route::middleware(['auth:sanctum', 'verified'])->post('update_zanr', [ZanroviController::class, 'update'])->name('update_zanr');


Route::middleware(['auth:sanctum', 'verified'])->get('nagrade', [NagradeController::class, 'index'])->name('nagrade');
Route::middleware(['auth:sanctum', 'verified'])->get('statistika', [StatistikaController::class, 'index'])->name('statistika');