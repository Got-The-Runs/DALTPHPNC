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
        return view('chitietbocauhoi',['lst' => $lst]);
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
    public function edit(ChiTietBoCauHoi $chiTietBoCauHoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChiTietBoCauHoiRequest  $request
     * @param  \App\Models\ChiTietBoCauHoi  $chiTietBoCauHoi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChiTietBoCauHoiRequest $request, ChiTietBoCauHoi $chiTietBoCauHoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiTietBoCauHoi  $chiTietBoCauHoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTietBoCauHoi $chiTietBoCauHoi)
    {
        //
    }
}
