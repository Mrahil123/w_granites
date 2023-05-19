<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,"index"])->name("home");

Route::get("/head-stones",[PageController::class,"p_head_stones"])->name("p_head_stones");
Route::get("/stone-furniture",[PageController::class,"p_stone_funriture"])->name("p_stone_funriture");
Route::get("/stone-laying",[PageController::class,"p_stone_laying"])->name("p_stone_laying");
Route::get("/granite-fence-poles",[PageController::class,"p_granite_fence_poles"])->name("p_granite_fence_poles");
Route::get("/wash-basins",[PageController::class,"p_wash_basins"])->name("p_wash_basins");

Route::get('/about',[PageController::class,"about"])->name("about");
Route::get('/contact-us',[PageController::class,"contact"])->name("contact");
Route::view('/en-form',"pages.en_form")->name("en_form");

// Admin View
Route::view('/admin',"pages.admin")->name("admin");
Route::post('/store',[ProductController::class,"store"])->name("store");
