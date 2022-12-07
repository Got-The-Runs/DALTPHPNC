<?php

namespace App\Http\Controllers;

use App\Models\BoCauHoi;
use App\Http\Requests\StoreBoCauHoiRequest;
use App\Http\Requests\UpdateBoCauHoiRequest;

class BoCauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lst =BoCauHoi::all();
        return view('bocauhoi',['lst' => $lst]);
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
     * @param  \App\Http\Requests\StoreBoCauHoiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoCauHoiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BoCauHoi  $boCauHoi
     * @return \Illuminate\Http\Response
     */
    public function show(BoCauHoi $boCauHoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BoCauHoi  $boCauHoi
     * @return \Illuminate\Http\Response
     */
    public function edit(BoCauHoi $boCauHoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBoCauHoiRequest  $request
     * @param  \App\Models\BoCauHoi  $boCauHoi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoCauHoiRequest $request, BoCauHoi $boCauHoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BoCauHoi  $boCauHoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoCauHoi $boCauHoi)
    {
        //
    }
}