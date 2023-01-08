<?php

use App\Http\Controllers\CocheController;
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

Route::get('/',function(){
    return redirect('coches');
});
       
Route::get('/coches/buscar',[CocheController::class,'buscar'])->name('coches.buscar');
    
Route::post('/coches/find',[CocheController::class,'busqueda'])->name('coches.busqueda');
    
Route::resource('coches',CocheController::class);
