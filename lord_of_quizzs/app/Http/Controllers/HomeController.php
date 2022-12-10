<?php

namespace App\Http\Controllers;

use App\Models\ChiTietBoCauHoi;
use App\Models\BoCauHoi;
use App\Models\CauHoi;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $lstCauHoi = CauHoi::all();
        $cauhoi = count($lstCauHoi);
        return view('dashboard',['cauhoi'=>$cauhoi]);
    }
}
