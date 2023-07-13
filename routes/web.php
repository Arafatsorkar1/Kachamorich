<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\DashBoardController;





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   Route::get('/dashboard', [DashBoardController::class,'index'])->name('index');
});
