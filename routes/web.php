<?php

use App\Livewire\Dashboard;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', Dashboard::class)->name('dashboard');