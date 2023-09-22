<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Pertanyaan;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all();
        
        return view('pertanyaan.tampil', ['pertanyaan' => $pertanyaan]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('pertanyaan.tambah', ['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:2048',
            'kategori_id' => 'required'
        ]);

        //mengganti nama file
        $imageName = time().'.'.$request->gambar->extension();
        //tempat penyimpanan file
        $request->gambar->move(public_path('image'), $imageName);

        $pertanyaan = new Pertanyaan;

        $pertanyaan->title = $request->input('title');
        $pertanyaan->content = $request->input('content');
        $pertanyaan->gambar = $imageName;
        $pertanyaan->kategori_id = $request->input('kategori_id');

        $pertanyaan->save();

        return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pertanyaan = Pertanyaan::find($id);

        return view('pertanyaan.detail', ['pertanyaan' => $pertanyaan]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $kategori = Kategori::all();

        return view('pertanyaan.edit', ['pertanyaan' => $pertanyaan, 'kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png|max:2048',
            'kategori_id' => 'required'
        ]);

        $pertanyaan = Pertanyaan::find($id);

        if ($request->has('gambar')) {
            $path = "image/";
    
            // Hapus gambar lama
            File::delete(public_path($path . $pertanyaan->gambar));
    
            $image_name = time().'.'.$request->gambar->extension();
    
            // Pindahkan gambar baru
            $request->gambar->move(public_path($path), $image_name);
    
            // Atur nama gambar baru
            $pertanyaan->gambar = $image_name;
        }

        $pertanyaan->title = $request->input('title');
        $pertanyaan->content = $request->input('content');
        $pertanyaan->kategori_id = $request->input('kategori_id');

        $pertanyaan->save();

        return redirect('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pertanyaan = Pertanyaan::find($id);

        $path = "image/";
        File::delete($path . $pertanyaan->gambar);
        $pertanyaan -> delete();
        return redirect('/pertanyaan');
    }
}
