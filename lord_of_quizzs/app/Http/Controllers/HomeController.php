<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\LinhVuc;
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
        $lstNguoiChoi = User::all();
        $demnguoichoi = count($lstNguoiChoi);

        $lstLinhVuc = LinhVuc::all();
        $demlinhvuc = count($lstLinhVuc);

        $lstBoCauHoi = BoCauHoi::all();
        $dembocauhoi = count($lstBoCauHoi);

        $lstCauHoi = CauHoi::all()->except('trang_thai'==1);
        $demcauhoi = count($lstCauHoi);

        $lstChiTietBoCauHoi = ChiTietBoCauHoi::all();
        $demchitietbocauhoi = count($lstChiTietBoCauHoi);
        return view('dashboard',[
            'demnguoichoi'=>$demnguoichoi,
            'demlinhvuc'=>$demlinhvuc,
            'dembocauhoi'=>$dembocauhoi,
            'demcauhoi'=>$demcauhoi,
            'demchitietbocauhoi'=>$demchitietbocauhoi
        ]);
        // return view('linhvuc',['lst' => $lst]);
    }
}
