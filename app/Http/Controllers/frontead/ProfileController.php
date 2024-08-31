<?php

namespace App\Http\Controllers\Frontead;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontead\ProfilePasswordUpdateRequest;
use App\Http\Requests\Frontead\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function updateProfile(ProfileUpdateRequest $request)
    {
       // dd($request->all());
            $users = Auth::user();
            $users->name   = $request->name;
            $users->email  = $request->email;
            $users->save();

            toastr('success', 'Profile updated successfully');

            return redirect()->back();

       }

       public function updatePassword(ProfilePasswordUpdateRequest $request)
       {

        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();
        toastr('Update password successfully', 'success');
        return redirect()->back();

       }
}