<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DiscordNotification extends Controller
{
    public function notification()
    {
        return 'dsd';
    }

    public function tes()
    {
        return User::first();
    }
}
