<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profile.show', [
            'profileUser' => $user,
            'todos' => $user->todos()->with('owner'),
            'followerCount' => $user->followers()->count(),
            'followingCount' => $user->following()->count()
        ]);
    }
}
