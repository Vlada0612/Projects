<?php

namespace App\Http\Controllers;

use App\Http\Requests\SummaryRequest;

use Auth;
use App\Summary;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function postIndex(SummaryRequest $r) {
        $r['userId'] = Auth::user()->id;
        $r['type'] = 'default';
        Summary::create($r->all());
        return redirect()->back();
    }
}
