<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function UploadAvatar(Request $request)
    {
        if($request->hasFile('image')){
            user::uploadAvatar($request->image);
            $request->session()->flash('message', 'Image Uploaded.');
            return redirect()->back();
        }
        $request->session()->flash('error', 'Image not Uploaded.');
        return redirect()->back();
    }

    public function index()
    {
        return view('classic');
    }
}
