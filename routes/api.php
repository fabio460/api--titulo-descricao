<?php

use App\Http\Controllers\crud_controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResources([
    '/lista'=>crud_controller::class
]);