<?php 

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class BaseController extends Controller 
{
  public function sendResponse($results, $message = "", $code = 200)
  {
    $response = [
      'status' => $code,
      'success' => true,
      'message' => $message,
      'data' => $results
    ];

    return response()->json($response)->setStatusCode($code);
  }

}