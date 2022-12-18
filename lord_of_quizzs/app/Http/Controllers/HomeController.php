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
        $lstNguoiChoi = User::where('trang_thai',1)->get();
        $demnguoichoi = count($lstNguoiChoi);

        $lstLinhVuc = LinhVuc::where('trang_thai',1)->get();
        $demlinhvuc = count($lstLinhVuc);

        $lstBoCauHoi = BoCauHoi::where('trang_thai',1)->get();
        $dembocauhoi = count($lstBoCauHoi);

        $lstCauHoi = CauHoi::where('trang_thai',1)->get();
        $demcauhoi = count($lstCauHoi);

        $lstChiTietBoCauHoi = ChiTietBoCauHoi::where('trang_thai',1)->get();
        $demchitietbocauhoi = count($lstChiTietBoCauHoi);
        return view('dashboard',[
            'demnguoichoi'=>$demnguoichoi,
            'demlinhvuc'=>$demlinhvuc,
            'dembocauhoi'=>$dembocauhoi,
            'demcauhoi'=>$demcauhoi,
            'demchitietbocauhoi'=>$demchitietbocauhoi
        ]);
    }
}
