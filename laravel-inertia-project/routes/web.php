<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;



Route::get('/', [SiteController::class,'Index'])->name('Index');
