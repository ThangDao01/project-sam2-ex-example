<?php

namespace App\Http\Controllers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function upload(Request $request){
//        $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath())->getSecurePath();
        $uploadedFileUrl = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();

//        $result = $request->get('file');
        dd( $uploadedFileUrl);
    }
}
