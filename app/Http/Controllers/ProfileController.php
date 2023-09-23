<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $iduser = auth::id();

        $profile = profile::where('user_id', $iduser)->first();
        return view('profile.user', ['profile' => $profile]);
    }

    public function edit($id)
    {
        // Dapatkan data profil berdasarkan $id
        $profile = Profile::find($id);
        
        // Tampilkan tampilan edit profil
        return view('profile.edit', ['profile' => $profile]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'umur' => 'required',
            'alamat' => 'required',
            'biodata' => 'required',
        ]);
    
        $profile = Profile::find($id);
        $profile->umur = $request->umur;
        $profile->alamat = $request->alamat;
        $profile->biodata = $request->biodata;
    
        $profile->save();
    
        return redirect('/');
    }
}

