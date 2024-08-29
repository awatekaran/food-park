<?php

namespace App\Http\Controllers\Frontead;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontead\ProfileUpdateRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateProfile(ProfileUpdateRequest $request)
    {
            dd($request->all());
    }
}