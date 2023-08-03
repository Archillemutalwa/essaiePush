<?php
use App\Http\Controllers\PostController;
use App\Models\Province;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, 'step1'])->name('form');
Route::post('/form', [PostController::class, 'store'])->name('form.store');


Route::get('/live', [PostController::class, 'option'])->name('option');


Route::get('/formStep2', [PostController::class, 'step2'])->name('form.step2');
Route::post('/formStep2', [PostController::class, 'storeStep2'])->name('form.storeStep2');

Route::get('/formStep3', [PostController::class, 'step3'])->name('form.step3');
Route::post('/formStep3', [PostController::class, 'storeStep3'])->name('form.storeStep3');

Route::get('/cotisation', [PostController::class, 'cotisation'])->name('form.cotisation');
Route::post('/cotisation', [PostController::class, 'storeCotisation'])->name('form.storeCotisation');

Route::get('/try', function () {
    return view('try');
});