<?php

use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [MainPageController::class,'index'])->name('main.page');
