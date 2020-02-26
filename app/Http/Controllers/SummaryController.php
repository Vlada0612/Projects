<?php

namespace App\Http\Controllers;

use App\Summary;

class SummaryController extends Controller
{
    public function getIndex() {
    $objs = Summary::orderBy('id', 'DESC')->paginate();
    return view('summaries', compact('objs'));
    }
}
