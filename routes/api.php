<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CommonController;
use App\Http\Controllers\API\LoanController;
use App\Http\Controllers\MPESAController;
use App\Http\Controllers\MPESAResponsesController;


Route::get('blog', [CommonController::class, 'blog']);



