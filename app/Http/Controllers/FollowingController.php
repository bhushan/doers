<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;

class FollowingController extends Controller
{
    public function index(User $user)
    {
        return view('following.index', [
            'user' => $user,
            'following' => $user->following
        ]);
    }
}
