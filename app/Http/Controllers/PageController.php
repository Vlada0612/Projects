<?php

namespace App\Http\Controllers;

use App\Maintext;

class PageController extends Controller
{
    public function getIndex($url = null) {
    if(!$url) {
    $file = 'index';
    } else {
    $file = $url;
    }
        $obj = Maintext::where('url', $file) -> first();
        return  view('page', compact('obj'));
    }
}
