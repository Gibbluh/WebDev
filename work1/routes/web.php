<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\Person;

Route::get('/', function () {
    $people = Person::orderBy('last_name')->orderBy('first_name')->get();
    return view('hello', compact('people'));
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
