<?php

namespace App\Http\Controllers;

use App\Models\ChiTietBoCauHoi;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChiTietBoCauHoiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChiTietBoCauHoiRequest $request)
    {
        //
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
