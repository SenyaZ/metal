<?php

    use App\Http\Controllers\CreateFeedback;
    use App\Http\Controllers\RedirectToKategory;
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
    return view('home');
})->name('home');

    Route::get('/kategory/{kategory?}',[RedirectToKategory::class, 'kategory'] )->name('kategory');



    Route::get('/kategory/{kategory?}/id/{id?}',[RedirectToKategory::class, 'moreAboutProduct'] );


    Route::post('/create-feedbacks',[CreateFeedback::class, 'createFeed'] )->name('feedbacks');

    Route::view('/admin', 'login')->name('login');

    Route::any('/login', [\App\Http\Controllers\Login::class, 'login'])->name('login');

    Route::view('/admin-panel', 'admin-panel')->name('admin-panel')->middleware('auth');
    Route::any('/add-product', [\App\Http\Controllers\Product::class, 'add'])->name('add-product');


    Route::post('/mail', [\App\Http\Controllers\MailController::class, 'send'])->name('mail');


    //    Route::get('/more', function () {
//        return view('more');
//    })->name('more');












