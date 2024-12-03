<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function timezone($timezone)
    {
        $greetings = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $title = '';
        $greeting = '';
        switch ($timezone) {
            case 'morning':
                $title = '朝のあいさつ';
                $greeting = $greetings[0];
                break;
            case 'afternoon':
                $title = '昼のあいさつ';
                $greeting = $greetings[1];
                break;
            case 'evening':
                $title = '夕方のあいさつ';
                $greeting = $greetings[2];
                break;
            case 'night':
                $title = '夜のあいさつ';
                $greeting = $greetings[3];
                break;
            case 'random':
                shuffle($greetings);
                $title = 'ランダムなメッセージ';
                $greeting = $greetings[0];
                break;
        }
        return view('greeting', ['title' => $title, 'greeting' => $greeting]);
    }
    public function freeword($word)
    {
        return view('freeword', ['word' => $word]);
    }

}
