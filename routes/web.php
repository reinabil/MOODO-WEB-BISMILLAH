<<<<<<< HEAD
<<<<<<< HEAD
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\DoaController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('note/index');
})->name('dashboard');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('notes', NoteController::class);
});
Route::resource('doas', DoaController::class);
=======
>>>>>>> 682ec22fc57a80011b216c1f928d67c42d11a861
=======
>>>>>>> 682ec22fc57a80011b216c1f928d67c42d11a861
