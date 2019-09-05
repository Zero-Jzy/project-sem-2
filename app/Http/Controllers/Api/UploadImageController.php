<?php

namespace App\Http\Controllers\Api;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;


class UploadImageController extends Controller
{
    public function upload(Request $request)
    {
        $images = $request->file('images');
        Log::info($images->getClientOriginalName());
//        Log::info($images);
    }
}
