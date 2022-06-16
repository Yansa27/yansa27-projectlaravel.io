<?php

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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard1', function () {
    return view('dalam\dashboard1');
});

Route::get('/tambahsiswa', function () {
    return view('dalam\tambahsiswa');
});

Route::get('/tambahguru', function () {
    return view('dalam\tambahguru');
});

Route::get('/siswa', function () {
    return view('dalam\siswa');
});

Route::get('/detailjadwal', function () {
    return view('dalam\detailjadwal');
});


Route::get('/tambahjadwal', function () {
    return view('dalam\tambahjadwal');
}); 




Route::get('/jadwal','datasiswacontroller@jadwal');
Route::get('/datasiswa','datasiswacontroller@index');
Route::get('/dataguru','datasiswacontroller@dosen');
Route::get('/detailsiswa/{mahasiswa}','datasiswacontroller@show');
Route::get('/detailguru/{dosen}','datasiswacontroller@detail');
Route::get('dalam/tambahsiswa','datasiswacontroller@create');
Route::post('/datasiswa','datasiswacontroller@store');
Route::get('dalam/tambahguru','datasiswacontroller@createguru');
Route::post('/dataguru','datasiswacontroller@storeguru'); /*eror */
Route::get('/siswa','datasiswacontroller@indexs');
Route::get('/guru','datasiswacontroller@dosen1');
Route::delete('siswa/{mahasiswa}','datasiswacontroller@destroy');
Route::delete('guru/{dosen}','datasiswacontroller@destroy1');
Route::post('/jadwal','datasiswacontroller@storejadwal');
Route::get('dalam/tambahjadwal','datasiswacontroller@createjadwal');
Route::get('/detailjadwal','datasiswacontroller@jadwall');
Route::delete('detailjadwal/{jadwal}','datasiswacontroller@destroyjadwal');