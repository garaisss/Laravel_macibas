<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

use Facade\FlareClient\Stacktrace\File;
use App\Http\Controllers\PostController;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;


Route::get('/', [PostController::class, 'index'])->name('home');

Route::get("posts/{post:slug}", [PostController::class, 'show']);

Route::get("category/{category:slug}", [PostController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'destroy'])->middleware('auth');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');