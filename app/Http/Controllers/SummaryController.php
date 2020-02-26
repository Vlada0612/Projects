<?php

namespace App\Http\Controllers;

use App\Summary;

class SummaryController extends Controller
{
    public function getIndex() {
    $objs = Summary::orderBy('id', 'DESC')->paginate();
    return view('summaries', compact('objs'));
    }

    public function getOne($id=null) {
    $obj=Summary::find($id);
    return view('summary', compact('obj'));
    }

    public function getEdit($id=null) {
    $obj=Summary::find($id);
    return view('home', compact('obj'));
    }
}
