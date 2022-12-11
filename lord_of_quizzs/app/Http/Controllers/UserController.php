<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

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
        return view('users.index',['lst' => $lst]);
        // return view('users.index', ['users' => $model->paginate(15)]);
    }
    public function destroy(User $user)
    {
        if($user->trang_thai== 1){
            $user->fill([
                'trang_thai'=> 0,
            ]);
            $user->save();
            return redirect()->route('user.index');
        }
        else if($user->trang_thai== 0){
            $user->fill([
                'trang_thai'=> 1,
            ]);
            $user->save();
            return redirect()->route('user.index');
        }
    }
}
