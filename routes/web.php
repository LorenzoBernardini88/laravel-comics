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
    $data_comics = config('comics');
    $nav_data = config('nav_data');
    $footer_top_data = config('top_footer_data');
    return view('comic',['comics'=>$data_comics,'nav'=>$nav_data,'topfooter'=>$footer_top_data]);
});


