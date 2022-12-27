<?php

namespace App\Http\Controllers\Api;

use App\Models\LinhVuc;
use App\Models\BoCauHoi;
use App\Http\Requests\StoreLinhVucRequest;
use App\Http\Requests\UpdateLinhVucRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstBCH = BoCauHoi::all();
        $lst =LinhVuc::all();
        $response = [
            'status' => true,
            'linhvuc' => $lst
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('linhvuc_create');
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
        $p =LinhVuc::create(
            [
                'ten_linh_vuc'=>$request->ten_linh_vuc,
                'trang_thai'=> 1,
            ]
        );
        $response = [
            'status' => true,
            'linhvuc' => $p
        ];
        return response()->json($response, 200);
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
    public function edit(LinhVuc $linhvuc)
    {
        //
        $lst=LinhVuc::all();
        return view('linhvuc_edit',[
        'p'=>$linhvuc,'lst'=>$lst,  
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLinhVucRequest  $request
     * @param  \App\Models\LinhVuc  $linhVuc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLinhVucRequest $request, LinhVuc $linhvuc)
    {

        $linhvuc->fill([
            'id'=>$request->id,
            'ten_linh_vuc'=>$request->ten_linh_vuc,
        ]);
        $linhvuc->save();
        $response = [
            'status' => true,
            'linhvuc' => $linhvuc
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LinhVuc  $linhVuc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $check = LinhVuc::find($id);
        if($check->trang_thai== 1){
            $check->fill([
                'trang_thai'=> 0,
            ]);
            $check->save();
            $response = [
                'status' => true,
                'linhvuc' => $check
            ];
            return response()->json($response, 200);
        }
        else if($check->trang_thai== 0){
            $check->fill([
                'trang_thai'=> 1,
            ]);
            $check->save();
            $response = [
                'status' => true,
                'linhvuc' => $check
            ];
            return response()->json($response, 200);
        }
    }
}
