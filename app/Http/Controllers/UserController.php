<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;


class UserController extends Controller
{
    public function index(UserService $userService) {
        return $userService->ListUsers();
    }

    public function first(UserService $userService) {
        return view('users.index', ['users' => $userService->listUsers()]);
    }

    public function show(UserService $userService, $id) {
        $user = collect($userService->listUsers())->filter(function ($item) use ($id) {
            return $item('id') == $id;
        })->first();
        
        return $user;
    }
}
