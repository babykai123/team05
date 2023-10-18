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
    return view('welcome');
});

Route::get("aaaaaaa/{$c}", function ($c) {
    $a='aaaaaa';
for($i=$c;$i<1000;$i++)
    {
      $a=$a."</br>".$i ;
    }
    return $a;
});
Route::get('/bbb', function ($c) {
    return view('bbb');
});
?>
