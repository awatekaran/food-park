<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\ProfilePasswordUpdateRequest;
use App\Http\Requests\admin\ProfileUpdateRequest;
use App\Models\User;
use App\traits\FileUploadTrait;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        //dd('df');
        return view('admin.profile.index');
    }

    public function updateprofile(ProfileUpdateRequest $request)
    {

        $imagaName = $this->uploadimage($request, 'avatar');
       // dd($imagaName);
        $userId = auth()->user()->id;
        $user  = User::find($userId);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->avatar = isset($imagaName) ? $imagaName : auth()->user()->avatar;
        $user->save();
        toastr('Profile update successfully', 'success');
        return redirect()->back();
    }

    public function updatepassword(ProfilePasswordUpdateRequest $request)
    {
        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();
        toastr('Update password successfully', 'success');
        return redirect()->back();
    }
}