<?php

use App\Http\Livewire\Post\Create;
use App\Http\Livewire\Post\Index;
use App\Http\Livewire\Post\PostForm;
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
    return view('layouts.content');
});
Route::get('/posts', Index::class)->name('post.index');
Route::get('/posts/create', Create::class)->name('post.create');
