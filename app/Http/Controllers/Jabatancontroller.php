<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class Jabatancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatans = Jabatan::all();
        
        return view('jabatan.index', ['jabatans' => $jabatans]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('jabatan.create', [
            'pegawais'=>Pegawai::all(),
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validateData = $request->validate([
        'nama_jab' => 'required',
        'awal_jab' => 'required',
        'akhir_jab' => 'required',
        // 'lama_jab' => 'required',
        'id_pegawai' => 'required'
        
    ]);

    // Gunakan metode create untuk menyimpan data ke database
    jabatan::create($validateData);
    
    return redirect('/jabatan-backend')->with('success', 'Task Created Successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jabatans = Jabatan::find($id);
        $pegawais = Pegawai::all();
        return view('jabatan.edit', compact('jabatans', 'pegawais'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'nama_jab' => 'required',
            'awal_jab' => 'required',
            'akhir_jab' => 'required',
            // 'lama_jab' => 'required',
            'id_pegawai' => 'required'

        ]);
        // Cari data berdasarkan id
        $data = jabatan::findOrFail($id);
        // Lakukan perubahan data
        $data->update($validatedData);

        return redirect()->route('jabatan.index');
        return redirect('/jabatan-backend')->with('success', 'Task edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        jabatan::destroy($id);
        return redirect('/jabatan-backend')->with('success', 'Task delated Successfully!');
    }
}
