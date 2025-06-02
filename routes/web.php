<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'Welcome to Notes API (by michaelninder)']); //or ewhatever...
});
