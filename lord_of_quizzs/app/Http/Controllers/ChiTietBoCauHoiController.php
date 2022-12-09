<?php

namespace App\Http\Controllers;

use App\Models\ChiTietBoCauHoi;
use App\Models\BoCauHoi;
use App\Models\CauHoi;
use App\Http\Requests\StoreChiTietBoCauHoiRequest;
use App\Http\Requests\UpdateChiTietBoCauHoiRequest;

class ChiTietBoCauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lst =ChiTietBoCauHoi::all();
        $lstcauhoi =CauHoi::all();
        return view('chitietbocauhoi',['lst' => $lst,'lstcauhoi'=>$lstcauhoi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lsBoCauHoi = BoCauHoi::all();
        $lsCauHoi = CauHoi::all();
        return view('chitietbocauhoi_create',['lsBoCauHoi'=> $lsBoCauHoi,'lsCauHoi'=>$lsCauHoi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChiTietBoCauHoiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChiTietBoCauHoiRequest $request)
    {
        $p =ChiTietBoCauHoi::create(
            [
                'bo_cau_hoi_id'=>$request->bo_cau_hoi_id,
                'cau_hoi_id'=>$request->cau_hoi_id,
                'trang_thai'=> 1,
            ]
        );
        return redirect()->route('chitietbocauhois.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChiTietBoCauHoi  $chiTietBoCauHoi
     * @return \Illuminate\Http\Response
     */
    public function show(ChiTietBoCauHoi $chiTietBoCauHoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChiTietBoCauHoi  $chiTietBoCauHoi
     * @return \Illuminate\Http\Response
     */
    public function edit(ChiTietBoCauHoi $chitietbocauhoi)
    {
        //
        $lst=ChiTietBoCauHoi::all();
        $lstbocauhoi = BoCauHoi::all();
        $lstcauhoi = CauHoi::all();
        
        return view('chitietbocauhoi_edit',[
            'p'=>$chitietbocauhoi,'lst'=>$lst, 'lstBoCauHoi'=>$lstbocauhoi ,'lstCauHoi'=>$lstcauhoi    
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChiTietBoCauHoiRequest  $request
     * @param  \App\Models\ChiTietBoCauHoi  $chiTietBoCauHoi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChiTietBoCauHoiRequest $request, ChiTietBoCauHoi $chitietbocauhoi)
    {
        //
        $chitietbocauhoi->fill([
            'bo_cau_hoi_id'=>$request->bocauhoi,
            'cau_hoi_id'=>$request->cauhoi,
        ]);
        $chitietbocauhoi->save();
        return redirect()->route('chitietbocauhois.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiTietBoCauHoi  $chiTietBoCauHoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTietBoCauHoi $chitietbocauhoi)
    {
        //
        $chitietbocauhoi->fill([
            'trang_thai'=> 0,
        ]);
        $chitietbocauhoi->save();
        return redirect()->route('chitietbocauhois.index');
    }
}
