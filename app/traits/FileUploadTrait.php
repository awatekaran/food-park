<?php
namespace app\traits;

use Illuminate\Http\Request;
use File;

trait FileUploadTrait {

    function uploadimage(Request $request, $inputName, $oldPath=NULL, $path='/uploads'){

       if($request->hasFile($inputName))
       {
            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_'.uniqid().'.'.$ext;
            $image->move(public_path($path), $imageName);

             //delete privious file when exits
             if($oldPath && File::exists(public_path($oldPath)))
             {
                 File::delete(public_path($oldPath));
             }

            return $path.'/'.$imageName;

       }

       return NULL;
    }
}