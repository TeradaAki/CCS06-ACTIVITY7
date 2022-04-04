<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ZephaniahController;

Route::get('/', [ZephaniahController::class, 'index']);
Route::get('/chapter/{chapter_number}', [ZephaniahController::class, "readByChapter"]);
Route::get('/all-chapters', [ZephaniahController::class, 'readAllChapters']);