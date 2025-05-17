<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return response()->json([
        'message' => 'Welcome to the Movie Catalog API',
        'version' => '1.0.0',
        'endpoints' => [
            'GET /api/movies' => 'Get all movies',
            'GET /api/movies/{id}' => 'Get a specific movie',
            'POST /api/movies' => 'Create a new movie',
            'PUT /api/movies/{id}' => 'Update a movie',
            'DELETE /api/movies/{id}' => 'Delete a movie'
        ]
    ]);
});
