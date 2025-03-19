<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    ItemController,
    PostController
};

Route::get('/', function () {
    return inertia('Home');
});


Route::resources([
    // 'items' => ItemController::class,
    'posts' => PostController::class,
]);




// Simulation to How laravel save routes
// $routes = [
//     'GET' => [
//         'employees' => function () { },
//         'posts' => [PostController::class, 'index'],
//         'posts/create' => [PostController::class, 'create'],
//         'posts/{post}' => [PostController::class, 'show'],
//         'posts/{post}/edit' => [PostController::class, 'edit']

//     ],
//     'POST' => [
//         'save-item' => Controller::class,
//         'posts' => [PostController::class, 'store']
//     ],
//     'PUT' => [
//         'posts/{post}' => [PostController::class, 'update']
//     ],
//     'DELETE' => [
//         'posts/{post}' => [PostController::class, 'destroy'],
//     ],
// ];