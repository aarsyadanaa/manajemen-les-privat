<?php
use Illuminate\Support\Facades\Route;

//umum
Route::get('/', function () {
    return view('Umum.login.login');
});
Route::get('/register', 'App\Http\Controllers\Umum\RegisterController@index');
Route::post('/register', 'App\Http\Controllers\Umum\RegisterController@store');
Route::get('/forgotpass', 'App\Http\Controllers\Umum\RegisterController@forgotpass');

//  jika belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'App\Http\Controllers\Umum\AuthController@login')->name('login');
    Route::post('/', 'App\Http\Controllers\Umum\AuthController@dologin');
});

// 
Route::group(['middleware' => ['auth', 'checkrole:1,2,3']], function() {
    Route::post('/logout', 'App\Http\Controllers\Umum\AuthController@logout');
    Route::get('/redirect', 'App\Http\Controllers\Umum\RedirectController@cek');
});

// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', 'App\Http\Controllers\Superadmin\SuperadminController@index');
    //cuti
    Route::get('/superadmin/cuti', 'App\Http\Controllers\Superadmin\CutiController@index');
    Route::get('/superadmin/cuti/create', 'App\Http\Controllers\Superadmin\CutiController@create');
    Route::post('/superadmin/cuti/create/post', 'App\Http\Controllers\Superadmin\CutiController@store');
    Route::get('/superadmin/cuti/edit/{id}', 'App\Http\Controllers\Superadmin\CutiController@edit');
    Route::put('/superadmin/cuti/edit/{id}', 'App\Http\Controllers\Superadmin\CutiController@update');
    Route::delete('/superadmin/cuti/hapus/{id}', 'App\Http\Controllers\Superadmin\CutiController@destroy');
    //histori
    Route::get('/superadmin/histori', 'App\Http\Controllers\Superadmin\HistoriController@index');
    Route::delete('/superadmin/histori/hapus/{id}', 'App\Http\Controllers\Superadmin\HistoriController@destroy');
    //pic
    Route::get('/superadmin/pic', 'App\Http\Controllers\Superadmin\PicController@index');
    Route::get('/superadmin/pic/rincian/{id}', 'App\Http\Controllers\Superadmin\PicController@rincian');
    Route::get('/superadmin/pic/create', 'App\Http\Controllers\Superadmin\PicController@create');
    Route::post('/superadmin/pic/create/post', 'App\Http\Controllers\Superadmin\PicController@store');
    Route::get('/superadmin/pic/edit/{id}', 'App\Http\Controllers\Superadmin\PicController@edit');
    Route::put('/superadmin/pic/edit/{id}', 'App\Http\Controllers\Superadmin\PicController@update');
    Route::delete('/superadmin/pic/hapus/{id}', 'App\Http\Controllers\Superadmin\PicController@destroy');
    //siswa
    Route::get('/superadmin/siswa', 'App\Http\Controllers\Superadmin\SiswaController@index');
    Route::get('/superadmin/siswa/create', 'App\Http\Controllers\Superadmin\SiswaController@create');
    Route::post('/superadmin/siswa/create/post', 'App\Http\Controllers\Superadmin\SiswaController@store');
    Route::get('/superadmin/siswa/edit/{id}', 'App\Http\Controllers\Superadmin\SiswaController@edit');
    Route::put('/superadmin/siswa/edit/{id}', 'App\Http\Controllers\Superadmin\SiswaController@update');
    Route::delete('/superadmin/siswa/hapus/{id}', 'App\Http\Controllers\Superadmin\SiswaController@destroy');
    //absen
    Route::get('/superadmin/absen', 'App\Http\Controllers\Superadmin\AbsenController@index');
    Route::put('/superadmin/absen/sort', 'App\Http\Controllers\Superadmin\AbsenController@sort');
    Route::get('/superadmin/absen/create', 'App\Http\Controllers\Superadmin\AbsenController@create');
    Route::post('/superadmin/absen/create/post', 'App\Http\Controllers\Superadmin\AbsenController@store');
    Route::get('/superadmin/absen/edit/{id}', 'App\Http\Controllers\Superadmin\AbsenController@edit');
    Route::put('/superadmin/absen/edit/{id}', 'App\Http\Controllers\Superadmin\AbsenController@update');
    Route::delete('/superadmin/absen/hapus/{id}', 'App\Http\Controllers\Superadmin\AbsenController@destroy');
    //rekap
    Route::get('/superadmin/rekap', 'App\Http\Controllers\Superadmin\RekapController@index');
    Route::get('/superadmin/rekap/rincian/{id}', 'App\Http\Controllers\Superadmin\RekapController@rincian');
    Route::get('/superadmin/rekap/create', 'App\Http\Controllers\Superadmin\RekapController@create');
    Route::post('/superadmin/rekap/create/post', 'App\Http\Controllers\Superadmin\RekapController@store');
    Route::get('/superadmin/rekap/edit/{id}', 'App\Http\Controllers\Superadmin\RekapController@edit');
    Route::put('/superadmin/rekap/edit/{id}', 'App\Http\Controllers\Superadmin\RekapController@update');
    Route::delete('/superadmin/rekap/hapus/{id}', 'App\Http\Controllers\Superadmin\RekapController@destroy');
    //user
    Route::get('/superadmin/user', 'App\Http\Controllers\Superadmin\UserController@index');
    Route::get('/superadmin/user/create', 'App\Http\Controllers\Superadmin\UserController@create');
    Route::post('/superadmin/user/create/post', 'App\Http\Controllers\Superadmin\UserController@store');
    Route::get('/superadmin/user/edit/{id}', 'App\Http\Controllers\Superadmin\UserController@edit');
    Route::put('/superadmin/user/edit/{id}', 'App\Http\Controllers\Superadmin\UserController@update');
    Route::delete('/superadmin/user/hapus/{id}', 'App\Http\Controllers\Superadmin\UserController@destroy');

});














