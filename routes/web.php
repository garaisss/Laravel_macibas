<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;
use Facade\FlareClient\Stacktrace\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;


Route::get('/', [PostController::class, 'index'])->name('home');

Route::get("posts/{post:slug}", [PostController::class, 'show']);

Route::get("category/{category:slug}", [PostController::class, 'show']);