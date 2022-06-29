<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;



Route::get("/",[TaskController::class,"index"])->name("homepage");
Route::get("/update/{id}",[TaskController::class,"done"])->name("done");
Route::get("/remove/{id}",[TaskController::class,"remove"])->name("remove");
Route::post("/store",[TaskController::class,"store"])->name("store");