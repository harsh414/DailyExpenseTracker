<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $user= auth()->user();
        return view('profile')->with('user',$user);
    }

    public function changeImage(Request $request)
    {
        $request->validate([
            'file' => 'max:6000 | min:20',
        ]);
        if($request->hasFile('file')) {
            $user= Auth::user();
            $image = $request->file('file');
            $path = $image->store('profileimages', 's3');

            $url = Storage::disk('s3')->url($path);
            $user->profileurl= $url;
            if($user->update())
            {
                return back();
            }else{
                return back();
            }

        }
    }
}
