<?php

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

// Relasi
Route::get('penulis', function() {
    $penulis = \App\User::find(1);

    foreach ($penulis->artikel as $data) {
        echo "<hr>";
        echo "Judul : $data->judul<br>";
        echo "Deskripsi : $data->deskripsi<br>";
        echo "Slug : $data->slug";
        echo "<hr>";
    }
});

// Relasi
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;
use App\Wali;

Route::get('relasi-1', function(){
    # Mencari mahasiswa dengan NIM 1010101
    $mahasiswa = Mahasiswa::where('nim', '=', '1010101')->first();

    # Menampilkan nama wali dari mahasiswa tersebut
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function(){
    # Mencari mahasiswa dengan NIM 1010101
    $mahasiswa = Mahasiswa::where('nim', '=', '1010101')->first();

    # Menampilkan nama dosen pembimbing dari Mahasiswa
    return $mahasiswa->wali->nama;
});

Route::get('relasi-3', function(){
    # Mencari dosen dengan yang bernama Abdul Musthafa
    $dosen = Dosen::where('nama', '=', 'Abdul Musthafa')->first();

    # Menampilkan seluruh data mahasiswa dari Dosen Abdul Musthafa
    foreach ($dosen->mahasiswa as $temp)
        echo '<li>Nama : ' . $temp->nama .
         '<strong>' . $temp->nim . '</strong></li>';
});

Route::get('relasi-4', function(){
    # Mencari data Mahasiswa yang Memiliki Nama Nauly Virya
    $novay = Mahasiswa::where('nama', '=', 'Nauly Virya')->first();

    # Menampilkan Seluruh data hobi Mahasiswa yang bernama Nauly Virya
    foreach ($novay->hobi as $temp)
        echo '<li>' . $temp->hobi . '</li>';
});

Route::get('relasi-5', function(){
    # Mencari data hobi Mandi hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    # Menampilkan semua mahasiswa yang mempunyai hobi Mandi Hujan
    foreach ($mandi_hujan->mahasiswa as $temp)
        echo '<li> Nama : ' . $temp->nama . '<strong>'
            . $temp->nim . '</strong></li>';
});

// CRUD SISWA
Route::resource('siswa', 'SiswaController');
Route::resource('tabungan', 'TabunganController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
