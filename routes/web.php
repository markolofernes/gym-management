<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
    return view('index');
});
Route::get('/', [MemberController::class, 'index'])->name('index');

Route::post('/addmember', [MemberController::class, 'create'])->name('addmember');

Route::get('/deletemember/{id}', [MemberController::class, 'delete'])->name('deletemember');

Route::get('/editform/{id}', [MemberController::class, 'edit'])->name('editform');

Route::post('updatemember{id}', [MemberController::class, 'update'])->name('updatemember');