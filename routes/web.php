<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::redirect('/', '/home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/tugas', function () {
    return PostController::fetchAllPost();
});

Route::get('/tambah', function () {
    return view('tambah');
})->middleware('auth');

Route::post('/tambah', function (Request $request) {
    return PostController::createPost($request);
})->middleware('auth');

Route::get('/tugas/{id}', function ($id) {
    return PostController::fetchPostById($id);
});

Route::get('/tugas/{id}/edit', function ($id) {
    return PostController::loadEditPage($id);
})->middleware('auth');

Route::post('/tugas/{id}/edit', function (Request $request, $id) {
    return PostController::updatePost($request, $id);
})->middleware('auth');

Route::post('/tugas/{id}/delete', function ($id) {
    return PostController::deletePost($id);
})->middleware('auth');

Route::post('/login', function (Request $request) {
    return AuthController::login($request);
});

Route::get('/login', function () {
    return view('login');
})->name('login');
