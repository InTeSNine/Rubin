<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UploadCsv;
use App\Livewire\StudentsList;
use App\Livewire\StudentDetails;
use App\Livewire\ChatBot;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/upload', UploadCsv::class);

Route::get('/students', StudentsList::class);

Route::get('/student-details/{id}', StudentDetails::class);

Route::get('/chat', ChatBot::class);




require __DIR__.'/auth.php';
