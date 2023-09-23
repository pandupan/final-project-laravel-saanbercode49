<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $iduser = auth::id();

        $detailprofile = profile::where('user_id', $iduser)->first();
        return view('profile.user', ['detailprofile' => $detailprofile]);
    }

    public function update(request $request, $id){
        $request->validate([
            'umur' => 'required',
            'alamat' => 'required',
            'biodata' => 'required',
        ]);

        $profile = profile::find($id);
        $profile->umur = $request->umur;
        $profile->alamat = $request->alamat;
        $profile->biodata = $request->biodata;

        $profile->save();

        return redirect('/');
    }
}

