<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function sendSuccess($message, $data = '')
    {
        return response()->json(array('status' => 200, 'message' => $message, 'successData' => $data), 200, []);
    }

    function sendError($error_message, $code = 400)
    {
        return response()->json(array('status' => $code, 'message' => $error_message), $code)->setStatusCode($code, $error_message);
    }
}
