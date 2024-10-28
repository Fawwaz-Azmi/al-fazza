<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Al-Fazza']);
});


Route::resource('/prestasi', PrestasiController::class)->only('index','show');

Route::resource('/pendaftaran', StudentController::class)->only('create','store');

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'auth'])->name('login.login');

Route::middleware(['auth:admin'])->group(function(){
    Route::prefix('admin')->group(function () {
        Route::resource('/pendaftar', StudentController::class)->only('index');
        Route::resource('/teachers', TeacherController::class)->except('show');
        Route::resource('/content', ContentController::class);
        Route::resource('/paket', PackageController::class);
        
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});



Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Hubungi Kami',
        'posts' => [
            [
                'title' => 'Judul Artikel 1',
                'author' => 'Annisa Walidatus',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur voluptate aliquid unde accusantium
                rem! Totam, ducimus culpa nulla dolor accusantium excepturi doloribus neque atque non, alias eos ut
                itaque inventore.'
            ],
            [
                'title' => 'Judul Artikel 2',
                'author' => 'Annisa Walidatus',
                'body' => 'Lorem ipsum konco, sit amet consectetur adipisicing elit mun kecepirit. Consequatur voluptate aliquid unde accusantium
                rem! Totam, ducimus culpa nulla dolor accusantium excepturi doloribus neque atque non, alias eos ut
                itaque inventore.'
            ]
        ]
    ]);

});