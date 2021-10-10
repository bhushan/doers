<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;

class FollowerController extends Controller
{
    public function index(User $user)
    {
        return view('followers.index', [
            'user' => $user,
            'followers' => $user->followers
        ]);
    }
}
