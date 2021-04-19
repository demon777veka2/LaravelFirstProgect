<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\CheckFunction;

class FunctionController extends Controller
{
    public function palindrom($text)
    {
        $checkFunction = new CheckFunction;

        return $checkFunction->checkPalindrom($text);
    }

    public function ip()
    {
        $checkFunction = new CheckFunction;

        $ip = request()->ip();
        $ipColor = $checkFunction->ipCheckColor($ip);
        return "Ваш ip: " . $ip . "</br> IP: " . $ipColor;
    }

}
