<?php

namespace App\Http\Controllers\Api;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use JD\Cloudder\Facades\Cloudder;


class UploadImageController extends Controller
{
    public function upload(Request $request)
    {
        $image = $request->get('images');

            Cloudder::upload($image, null);
            $result = Cloudder::getResult();

            $image_id = $result['public_id'] . '.' . $result['format'];


//        file_put_contents(storage_path() .'/foodSeeder.txt', var_export($newImage, true));

        return $image_id;

    }
}
