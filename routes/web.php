<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mosqueController;
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

Route::get('/', [mosqueController::class, 'index'])->name('index');
Route::get('/about', [mosqueController::class, 'about'])->name('about');
Route::get('/services', [mosqueController::class, 'services'])->name('services');
Route::get('/price', [mosqueController::class, 'price'])->name('price');
Route::get('/sermon', [mosqueController::class, 'sermon'])->name('sermon');
Route::get('/contact', [mosqueController::class, 'contact'])->name('contact');
Route::post('/info', [mosqueController::class, 'info'])->name('info');
Route::get('/madani-qaida-course', [mosqueController::class, 'madani_qaida_course'])->name('madani-qaida-course');
Route::get('/nazra-tul-quran', [mosqueController::class, 'nazra_tul_quran'])->name('nazra-tul-quran');
Route::get('/hifz-ul-quran', [mosqueController::class, 'hifz_ul_quran'])->name('hifz-ul-quran');
Route::get('/tarjuma-tul-quran', [mosqueController::class, 'tarjuma_tul_quran'])->name('tarjuma-tul-quran');
Route::get('/tafsir-al-quran', [mosqueController::class, 'tafsir_al_quran'])->name('tafsir-al-quran');
Route::get('/farz-uloom-course', [mosqueController::class, 'farz_uloom_course'])->name('farz-uloom-course');
Route::get('/namaz-course', [mosqueController::class, 'namaz_course'])->name('namaz-course');
Route::get('/seerat-e-mustafa-course', [mosqueController::class, 'seerat_e_mustafa_course'])->name('seerat-e-mustafa-course');
Route::get('/price-form',[mosqueController::class,'price_form'])->name('price-form');
Route::post('/price-form',[mosqueController::class,'store'])->name('price-form');