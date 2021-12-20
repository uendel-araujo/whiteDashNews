<?php

namespace App\Exceptions;

class Status 
{
  public function getStatusMessage(int $code)
  {
    $message = 'Unknown Status Code';
    switch($code){
      case 100:
        $message = "Continue";
        break;
      case 101:
        $message = "Switching Protocol";
        break;
        case 102:
          $message = "Processing";
          break;
        case 103:
          $message = "Early Hints";
          break;  
      case 200:
        $message = "Ok";
        break;
      case 201:
        $message = "Created";
        break;
      case 202:
        $message = "Accepted";
        break;
      case 203:
        $message = "Non-Authoritative Information";
        break;
      case 204:
        $message = "No Content";
        break;
      case 205:
        $message = "Reset Content";
        break;
      case 206:
        $message = "Partial Content";
        break;
      case 207:
        $message = "Multi-Status";
        break;
      
    }
  }
}