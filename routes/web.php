<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\SearchController;

Route::middleware('auth')->group(function () {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
  Route::get('/tweet/search/input', [SearchController::class, 'create'])->name('search.input');
  Route::get('/tweet/search/result', [SearchController::class, 'index'])->name('search.result');
>>>>>>> 8135d7bf10c9d0828844f5bf8c387353a0a82d64
  Route::get('/tweet/timeline', [TweetController::class, 'timeline'])->name('tweet.timeline');
  Route::get('user/{user}', [FollowController::class, 'show'])->name('follow.show');
>>>>>>> origin/main
  Route::post('user/{user}/follow', [FollowController::class, 'store'])->name('follow');
  Route::post('user/{user}/unfollow', [FollowController::class, 'destroy'])->name('unfollow');  
  Route::post('tweet/{tweet}/favorites', [FavoriteController::class, 'store'])->name('favorites');
  Route::post('tweet/{tweet}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites');  
  Route::get('/tweet/mypage', [TweetController::class, 'mydata'])->name('tweet.mypage');
  Route::resource('tweet', TweetController::class);
});

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

require __DIR__.'/auth.php';
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> origin/main
=======

>>>>>>> origin/main
