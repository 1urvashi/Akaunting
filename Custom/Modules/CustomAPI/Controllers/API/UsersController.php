<?php

namespace CustomAPI\Controllers\API;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\User;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        // Validate and create users
        $request->validate([
            'users.*.name' => 'required|string',
            'users.*.email' => 'required|email|unique:users,email',
        ]);

        $createdUsers = [];

        foreach ($request->input('users') as $userData) {
            $user = User::create($userData);
            $createdUsers[] = $user;
        }

        return response()->json(['message' => 'Users created successfully', 'data' => $createdUsers], 201);
    }
}
