<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Summary;

class DatalistController extends Controller
{
    public function postIndex() {
    $objs=Summary::where('title', 'LIKE', '%'.$_POST['list'].'%')->get();
   // return response()->json($objs);
   return view('includes.summaries', compact('objs'));
    }
}
