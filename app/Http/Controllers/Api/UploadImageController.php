<?php

namespace App\Http\Controllers\Api;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JD\Cloudder\Facades\Cloudder;


class UploadImageController extends Controller
{
    public function upload(Request $request)
    {
        $image = $request->file('images')->getRealPath();

        Cloudder::upload($image, null);
        return 'success';
//        Log::info($images);
    }
}
