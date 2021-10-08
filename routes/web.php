<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class,'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class,'store']);

Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');


//Route::get('categories/{category:slug}', function (Category $category) {
//    return view('posts.index', [
//        'posts' => $category->posts,
//    ]);
//});

//Route::get('authors/{author:username}', function (User $author){
//    return view('posts.index ',[
//        'posts'=> $author->posts,
//    ]);
//});


