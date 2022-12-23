<?php

namespace App\Http\Controllers;

use App\Models\ChiTietBoCauHoi;
use App\Models\CauHoi;
use App\Http\Requests\StoreCauHoiRequest;
use App\Http\Requests\UpdateCauHoiRequest;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lst =CauHoi::all();
        $lstCTBCH = ChiTietBoCauHoi::all();
        return view('cauhoi',['lst' => $lst, 'lstCTBCH' => $lstCTBCH]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cauhoi_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCauHoiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCauHoiRequest $request)
    {
        $p =CauHoi::create(
            [
                'cau_hoi'=>$request->cau_hoi,
                'cau_tra_loi_1'=>$request->cau_tra_loi_1,
                'cau_tra_loi_2'=>$request->cau_tra_loi_2,
                'cau_tra_loi_3'=>$request->cau_tra_loi_3,
                'cau_tra_loi_4'=>$request->cau_tra_loi_4,
                'dap_an' =>$request ->dap_an,
                'trang_thai'=> 1,
            ]
        );
        return redirect()->route('cauhois.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function show(CauHoi $cauHoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function edit(CauHoi $cauhoi)
    {
        $lst=CauHoi::all();
        return view('cauhoi_edit',[
        'p'=>$cauhoi,'lst'=>$lst,  
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCauHoiRequest  $request
     * @param  \App\Models\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCauHoiRequest $request, CauHoi $cauhoi)
    {
        //
        $cauhoi->fill([
            'id'=>$request->id,
            'cau_hoi'=>$request->cau_hoi,
            'cau_tra_loi_1'=>$request->cau_tra_loi_1,
            'cau_tra_loi_2'=>$request->cau_tra_loi_2,
            'cau_tra_loi_3'=>$request->cau_tra_loi_3,
            'cau_tra_loi_4'=>$request->cau_tra_loi_4,
            'dap_an'=>$request->dap_an,
        ]);
        $cauhoi->save();
        return redirect()->route('cauhois.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(CauHoi $cauhoi)
    {
        if($cauhoi->trang_thai== 1){
            $cauhoi->fill([
                'trang_thai'=> 0,
            ]);
            $cauhoi->save();
            return redirect()->route('cauhois.index');
        }
        else if($cauhoi->trang_thai== 0){
            $cauhoi->fill([
                'trang_thai'=> 1,
            ]);
            $cauhoi->save();
            return redirect()->route('cauhois.index');
        }
    }
}
