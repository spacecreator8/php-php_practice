<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
   ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add(['GET', 'POST'], '/test', [Controller\Site::class, 'test']);
Route::add(['GET', 'POST'], '/add_build', [Controller\BuildingController::class, 'add']);
Route::add(['GET', 'POST'], '/add_type', [Controller\TypesController::class, 'add']);
Route::add(['GET', 'POST'], '/add_room', [Controller\RoomsController::class, 'add']);
Route::add(['GET', 'POST'], '/overall_a', [Controller\RoomsController::class, 'overallArea']);
