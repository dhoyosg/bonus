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


Route::get('/login/{pass}', function ($pass = null) {
    if($pass == "A765"){
        return view('login');
    }else{
        return view("error");
    }

});

Route::get('login/A765/registervehicle','vehicleController@vistaRegistrar');
Route::post('login/A765/registervehicle', 'vehicleController@registerVehicle')->name('register_vehicle');

Route::get('login/A765/listvehicle','vehicleController@listVeh')->name('listv');

Route::get('login/A765/showstats','vehicleController@showStats')->name('showst');

Route::get('/{some}',function ($some){
    return view('error');
});

Route::get('/',function (){
    return view('error');
});
