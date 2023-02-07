<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Facade\FlareClient\Stacktrace\File;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;



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
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get("posts/{post:slug}", function (Post $post) {
    return view('post', [
        'post' => $post 
    ]);
});