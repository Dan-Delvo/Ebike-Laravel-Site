<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class Download extends Controller
{
    //

    public function download(){

        $filePath = public_path('files/app-release.apk');

        return Response::download($filePath);
    }
}
