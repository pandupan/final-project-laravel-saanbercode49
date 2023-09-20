<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = DB::table('kategori')->get();

        return view('kategori.tampil', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required'
        ]);

        DB::table('kategori')->insert([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi')
        ]);

        return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = DB::table('kategori')->find($id);

        return view('kategori.detail', ['kategori' => $kategori]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = DB::table('kategori')->find($id);

        return view('kategori.edit', ['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required'
        ]);

        DB::table('kategori')
                ->where("id", $id)
                ->update(
                    [
                        'nama' => $request->input('nama'),
                        'deskripsi' => $request->input('deskripsi')
                    ]
                    );

                return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori')->where('id', $id)->delete();

        return redirect('/kategori');
    }
}
