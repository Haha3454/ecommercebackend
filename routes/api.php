<?php
use App\Http\Controllers\CategorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
route::get("/categories",[categoriecontroller::class,'index']);
route::post("/categories",[categoriecontroller::class,'store']);
route::get("/categories/{id}",[categoriecontroller::class,'show']);
route::delete("/categories/{id}",[categoriecontroller::class,'delete']);
