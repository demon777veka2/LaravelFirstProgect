<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class CheckFunction
{

    public function ipCheckColor($ip)
    {
        if (($ip >= 167772160 && $ip <= 184549375) || ($ip >= 2886729728 && $ip <= 2887778303) || ($ip >= 3232235520 && $ip <= 3232301055))
            return "Серый";

        return "Белый";
    }

    public function checkPalindrom($text)
    {
        $arrayText = array('text' => $text);

        $validator = Validator::make($arrayText, [
            'text' => 'required|max:255|regex:/^[A-z]+$/'
        ]);

        if ($validator->fails()) {
            return 'Ошибка ввода данных';
        }

        $text = strtolower($text);
        $text = str_replace(' ', '', $text);
        $textRevers = strrev($text);

        if ($text  != $textRevers)
            return 'строка не палиндром <br>';
        else
            return 'ура, это палиндром!<br>';
    }
}
