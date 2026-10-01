<?php

use App\Models\Page;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $homePage = Page::firstWhere('name', 'home');
    return $homePage ? view('page', ['page' => $homePage]) : view('home.index');
})->name('home');

Route::get('/page/{name}', function (String $name) {
    return view('page', [
        'page' => Page::where('name', $name)->firstOrFail()
    ]);
})->name('page');

Route::get('/login', function () {
    return redirect()->route('filament.admin.auth.login');
})->name('login');
