<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profileEdit(Request $request)
    {   
        $user = User::where('id',Auth::id())->first();
        // dd($user);
        // $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function profileEditUpdate(Request $request)
    {   
        $id=Auth::user()->id;

        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->mobile_no=$request->mobile_no;
        $user->update();
        // $data = User::where(Auth::id(),$id);
        // $user = Auth::user();

        // return view('users.profile', compact('user'));
    }
}
