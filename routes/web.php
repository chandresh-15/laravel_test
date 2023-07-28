<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

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
Route::group(['prefix'=> 'employee' , 'as' => 'employee' ], function (){
    Route::get('/', [EmployeesController::class,'index'])->name('.index');
    Route::get('/show',[EmployeesController::class,'show'])->name('.show');
    Route::get('/create',[EmployeesController::class,'create'])->name('.create');
    Route::post('/store',[EmployeesController::class,'store'])->name('.store');
    Route::get('/{employees}/edit', [EmployeesController::class, 'edit'])->name('.edit');
    Route::put('/{employees}', [EmployeesController::class, 'update'])->name('.update');
    Route::delete('/{employees}', [EmployeesController::class,'destroy'])->name('.destroy');
});

