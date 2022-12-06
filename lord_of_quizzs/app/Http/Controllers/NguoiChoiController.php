<?php

namespace App\Http\Controllers;

use App\Models\NguoiChoi;
use App\Http\Requests\StoreNguoiChoiRequest;
use App\Http\Requests\UpdateNguoiChoiRequest;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lst =NguoiChoi::all();
        return view('nguoichoi',['lst' => $lst]);
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
     * @param  \App\Http\Requests\StoreNguoiChoiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNguoiChoiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NguoiChoi  $nguoiChoi
     * @return \Illuminate\Http\Response
     */
    public function show(NguoiChoi $nguoiChoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NguoiChoi  $nguoiChoi
     * @return \Illuminate\Http\Response
     */
    public function edit(NguoiChoi $nguoiChoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNguoiChoiRequest  $request
     * @param  \App\Models\NguoiChoi  $nguoiChoi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNguoiChoiRequest $request, NguoiChoi $nguoiChoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NguoiChoi  $nguoiChoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(NguoiChoi $nguoiChoi)
    {
        //
    }
}
