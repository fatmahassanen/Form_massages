<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contentViewControlle;


Route::get('/messages/create', [contentViewControlle::class, 'create']);
Route::post('/messages', [contentViewControlle::class, 'store'])->name('messages.store');
Route::get('/messages', [contentViewControlle::class, 'index'])->name('messages.index');


