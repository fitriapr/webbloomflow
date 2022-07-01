<?php

use App\Models\Article;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/product', function () {
    return view('product', [
        "title"=> "Product"
    ]);
});


Route::get('/article', function () {
    return view('article', [
        "title" => "Article",
        "articles" => Article::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact' , [
        "title" => "Contact",
        "name" => "Fitri Apriyani",
        "NPM" => "19552011113",
        "image"=> "profilfitri.jpg"
    ]);
});

//halaman Single Article
Route::get('/article/{slug}', function($slug){
   

    // $new_post = [];
    // foreach($article_ as $articles) {
    //     if($articles["slug"] === $slug) {
    //         $new_post = $articles;
    //     }
    // }

    return view('articles', [
        "title" => "Single Article",
        "articles" => Article::find($slug)
    ]);
});

