<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PostController::class, 'index'])->name('index');

// PostControllerのindexメソッドを呼び出すルートを定義。URLは/posts、HTTPメソッドはGET、ルート名はposts.index。
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// '/posts/create'にGetリクエストが来たら、PostControllerのcreateメソッドを実行する
Route::get('/posts/create', [PostController::class, 'create']);

// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
Route::get('/posts/{post}', [PostController::class, 'show']);

// '/posts'にPostリクエストが来たら、PostControllerのstoreメソッドを実行する
Route::post('/posts', [PostController::class, 'store']);

// '/posts/{対象データのID}/edit'にGetリクエストが来たら、PostControllerのeditメソッドを実行する
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

// '/posts/{対象データのID}'にPutリクエストが来たら、PostControllerのupdateメソッドを実行する
Route::put('/posts/{post}', [PostController::class, 'update']);

require __DIR__ . '/auth.php';
