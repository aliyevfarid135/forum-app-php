<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

Route::get('/create', [TopicController::class, 'create'])->name('create');
Route::post('/create/submit', [TopicController::class, 'create_topic'])->name('create_topic');
Route::post('/comment/{id}', [TopicController::class, 'comment'])->name('comment');
Route::get('/register', [RegistrationController::class, 'getReg'])->name('get-register');
Route::post('/register/submit', [RegistrationController::class, 'register'])->name('register');
Route::post('/login/submit', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'get']);
Route::get('/topics', [TopicController::class, 'getAllTopics'])->name('topics');
Route::get('/topics/{id}', [TopicController::class, 'topic'])->name('topic');
Route::get('/exit', [LoginController::class, 'log_out']);
Route::get('/search', [TopicController::class, 'search'])->name('src-get');
Route::post('/search/submit', [TopicController::class, 'findTopics'])->name('search');

