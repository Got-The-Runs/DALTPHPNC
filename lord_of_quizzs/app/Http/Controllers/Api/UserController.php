<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $lst =User::all();
        $response = [
            'status' => true,
            'user' => $lst
        ];
        return response()->json($response, 200);
    }
    public function destroy($id)
    {
        $check = User::find($id);
        if($check->trang_thai== 1){
            $check->fill([
                'trang_thai'=> 0,
            ]);
            $check->save();
            $response = [
                'status' => true,
                'bocauhoi' => $check
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
                'bocauhoi' => $check
            ];
            return response()->json($response, 200);
        }
    }
}
