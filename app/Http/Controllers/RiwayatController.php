<?php

namespace App\Http\Controllers;

use App\Models\riwayat_jabatan;
use App\Models\Pegawai;
use App\Models\riwayatjabatan;
use App\Models\riwayatriwayat_jabatan;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayat_jabatans = riwayatjabatan::all();
        
        return view('riwayat_jabatan.index', ['riwayat_jabatans' => $riwayat_jabatans]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('riwayat_jabatan.create', [
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
    riwayatjabatan::create($validateData);
    
    return redirect('/riwayat_jabatan-backend')->with('success', 'Task Created Successfully!');
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
        $riwayatriwayat_jabatans = riwayatjabatan::find($id);
        $riwayat_jabatans = riwayatjabatan::all();
        return view('riwayat_riwayat_jabatan.edit', compact('riwayatriwayat_jabatans', 'riwayat_jabatans'));
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
        $data = riwayatjabatan::findOrFail($id);
        // Lakukan perubahan data
        $data->update($validatedData);

        return redirect()->route('riwayat_jabatan.index');
        return redirect('/riwayat_jabatan-backend')->with('success', 'Task edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        riwayatjabatan::destroy($id);
        return redirect('/riwayat_jabatan-backend')->with('success', 'Task delated Successfully!');
    }
}
