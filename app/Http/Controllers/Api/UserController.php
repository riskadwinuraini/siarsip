<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function fetchUser($id) {
        $user = User::find($id);

        if ($user) {
            return response()->json([
                'nama' => $user->name,
                'no' => $user->no,
            ]);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        };
    }
}
