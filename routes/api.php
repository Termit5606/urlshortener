<?php

use App\Http\Controllers\Api\V1\UrlController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//JSON:API Urls Route
JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
    $server->resource('urls', UrlController::class);
});
