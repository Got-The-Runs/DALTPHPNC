<?php

namespace App\Http\Controllers;

use App\Models\LinhVuc;
use App\Models\BoCauHoi;
use App\Models\ChiTietBoCauHoi;
use App\Http\Requests\StoreBoCauHoiRequest;
use Illuminate\Http\Request;
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
        $linhvuc = LinhVuc::all();
        $lst =BoCauHoi::all();
        $lstCTBCH = ChiTietBoCauHoi::all();
        return view('bocauhoi',['lst' => $lst,'linhvuc'=>$linhvuc,'lstCTBCH' =>$lstCTBCH

    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lst = LinhVuc::where('trang_thai',1)->get();
        return view('bocauhoi_create',['lst'=> $lst]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBoCauHoiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoCauHoiRequest $request)
    {
        $p =BoCauHoi::create(
            [
                'linh_vuc_id'=>$request->linhvuc,
                'trang_thai'=> 1,
            ]
        );
        return redirect()->route('bocauhois.index');
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
    public function edit(BoCauHoi $bocauhoi)
    {
        $lst=LinhVuc::where('trang_thai',1)->get();
        return view('bocauhoi_edit',[
            'p'=>$bocauhoi,'lst'=>$lst,       
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBoCauHoiRequest  $request
     * @param  \App\Models\BoCauHoi  $boCauHoi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoCauHoiRequest $request, BoCauHoi $bocauhoi)
    {
        $bocauhoi->fill([
            'linh_vuc_id'=>$request->linhvuc,
        ]);
        $bocauhoi->save();
        return redirect()->route('bocauhois.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BoCauHoi  $boCauHoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoCauHoi $bocauhoi)
    {
        if($bocauhoi->trang_thai== 1){
            $bocauhoi->fill([
                'trang_thai'=> 0,
            ]);
            $bocauhoi->save();
            // $bocauhoi->delete();
            return redirect()->route('bocauhois.index');
        }
        else if($bocauhoi->trang_thai== 0){
            $bocauhoi->fill([
                'trang_thai'=> 1,
            ]);
            $bocauhoi->save();
            return redirect()->route('bocauhois.index');
        }
        
    }
}
