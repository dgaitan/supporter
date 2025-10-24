<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BaseObserver
{
    public function getCurrentUser(): ?User
    {
        return Auth::check() ? Auth::user() : null;
    }
}