<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kelurahan = Kelurahan::all();
        return view('admin.kelurahan.index', compact('list_kelurahan')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validasi Form Input
        $validated= $request->validate([
            'nama' => 'required|string',
            'kecamatan_nama' => 'required|string'
        ]);

        //Setelah divalidasi, kemudian menyimpan data

        Kelurahan::create($validated);  

        //Kemudian Berpindah Halaman

        return redirect('/kelurahan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //memgambil data sesuai dengan id
        //queery dalam sql select where id from kelurahan

        $kelurahan = Kelurahan::find($id);

        //Menampilkan data

        return view('admin.kelurahan.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
