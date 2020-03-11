<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summary;
class SearchController extends Controller
{
public function getIndex() {
$objs=Summary::where('title', 'LIKE', '%'.$_GET['list'].'%')->get();
   // return response()->json($objs);
   return view('summaries', compact('objs'));
}
}
