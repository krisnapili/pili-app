<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Services\UserServices;
use App\Http\Controllers\UserController;
use App\Services\UserService;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-container', function (Request $request) {
    $input = $request->input('key');
    return $input;

});
Route::get('/test-provider', function (UserService $userService){
    return $userService->listUsers();
});

Route::get('test-users', [userController::class, 'index']);

Route::get('test-facade', function (UserService $userService) {
    dd(Response::json($userService->listUsers()));
});

Route::get('/post/{post}/comment/{comment}', function (string $postId, string $comment) {
    return "Post ID: " . $postId . "- Comment: " . $comment;
});

Route::get('/post/{id}', function (string $id) {
    return $id;
})->where('id','[1-9]+');

Route::get('/search/{search}', function (string $search) {
    return $search;
})->where('search','.*');


Route::get('/test/route', function () {
    return route ('test-route');
})->name('test-route');

Route::middleware(['user-middleware'])->group(function(){
    Route::get('route-middleware-group/first', function (request $request) {
        echo 'first';
    });
    Route::get('route-middleware-group/second', function (request $request) {
        echo 'second';
    });   
});

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::get('/users/first', 'first');
    Route::get('/users/(id)', 'show');

});

Route::get('/token', function(Request $request) {

    return view('token');
});

Route::post('/token', function(Request $request) {
    return $request->all();
});