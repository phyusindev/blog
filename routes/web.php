<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('blogs',[
        'blogs'=>Blog::latest()->get()
    ]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {  //Blog::findOrFail($id)
    return view('blog',[
        'blog'=>$blog
    ]);
})->where('blog','[A-z\d\-_]+');

Route::get('/categories/{category:slug}', function (Category $category) {
    //dd ($category);
    return view ('blogs', [
        'blogs'=> $category->blogs
    ]);
});

Route::get('/users/{user:username}', function (User $user) { //homework
    //dd ($user);
    return view ('blogs', [
        'blogs'=> $user->blogs
    ]);
});