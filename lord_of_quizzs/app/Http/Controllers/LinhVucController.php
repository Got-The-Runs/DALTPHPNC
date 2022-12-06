<?php

namespace App\Http\Controllers;

use App\Models\LinhVuc;
use App\Http\Requests\StoreLinhVucRequest;
use App\Http\Requests\UpdateLinhVucRequest;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lst =LinhVuc::all();
        return view('linhvuc',['lst' => $lst]);
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
     * @param  \App\Http\Requests\StoreLinhVucRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLinhVucRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LinhVuc  $linhVuc
     * @return \Illuminate\Http\Response
     */
    public function show(LinhVuc $linhVuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LinhVuc  $linhVuc
     * @return \Illuminate\Http\Response
     */
    public function edit(LinhVuc $linhVuc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLinhVucRequest  $request
     * @param  \App\Models\LinhVuc  $linhVuc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLinhVucRequest $request, LinhVuc $linhVuc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LinhVuc  $linhVuc
     * @return \Illuminate\Http\Response
     */
    public function destroy(LinhVuc $linhVuc)
    {
        //
    }
}
