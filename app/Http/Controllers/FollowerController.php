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

    public function store(User $user)
    {
        auth()->user()->following()->attach($user);

        return back();
    }

    public function destroy(User $user)
    {
        auth()->user()->following()->detach($user);

        return back();
    }
}
