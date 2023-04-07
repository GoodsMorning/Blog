<?php

use App\Models\Category;
use App\Models\Post;
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

Route::get('/', function () {
    return view('index',['posts' => Post::with('category')->get()]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    //Find a post by its slug and pass it to a view call "post"
    return view('post', ['post' => $post]);

});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('index',['posts' => $category->post]);
});
