<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Komentar;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $komentar = Komentar::all();
        return view('komentar.tampil', ['komentar' => $komentar]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pertanyaan = Pertanyaan::all();
        return view('komentar.tambah', ['pertanyaan' => $pertanyaan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:2048',
            'pertanyaan_id' => 'required'
        ]);

        //mengganti nama file
        $imageName = time().'.'.$request->gambar->extension();
        //tempat penyimpanan file
        $request->gambar->move(public_path('image'), $imageName);

        $komentar = new Komentar;

        $komentar->content = $request->input('content');
        $komentar->gambar = $imageName;
        $komentar->pertanyaan_id = $request->input('pertanyaan_id');

        $komentar->save();

        return redirect('/komentar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $komentar = Komentar::find($id);
        
        return view('komentar.detail', ['komentar' => $komentar]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $komentar = Komentar::find($id);
        $pertanyaan = Pertanyaan::all();

        return view('komentar.edit', ['komentar' => $komentar, 'pertanyaan' => $pertanyaan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'content' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:2048',
            'pertanyaan_id' => 'required'
        ]);

        $komentar = Komentar::find($id);

        if ($request->has('gambar')) {
            $path = "image/";
    
            // Hapus gambar lama
            File::delete(public_path($path . $komentar->gambar));
    
            $image_name = time().'.'.$request->gambar->extension();
    
            // Pindahkan gambar baru
            $request->gambar->move(public_path($path), $image_name);
    
            // Atur nama gambar baru
            $komentar->gambar = $image_name;
        }

        $komentar->content = $request->input('content');
        $komentar->pertanyaan_id = $request->input('pertanyaan_id');

        $komentar->save();

        return redirect('/komentar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $komentar = Komentar::find($id);

        $path = "image/";
        File::delete($path . $komentar->gambar);
        $komentar -> delete();
        return redirect('/komentar');
    }
}
