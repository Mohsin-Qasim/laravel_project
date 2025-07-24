<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
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

// Route::get('/create', function () {
//     return view('create.post');
// });


Route::get('/create/post', [postController::class , 'postdata']);
Route::post('/createpost', [postController::class , 'storePost'])->name('formdata');

