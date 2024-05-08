<?php

namespace App\Http\Controllers;

use App\Models\gaji;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class Gajicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data gaji dari database menggunakan model gaji
        $gajis = gaji::all();
        
        // Mengirim data gaji ke view 'gaji.index'
        return view('gaji.index', compact('gajis')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gaji.create', [
             'pegawais'=>Pegawai::all(),
             'jabatans'=>Jabatan::all(),
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validateData = $request->validate([
        'besaran' => 'required',
        'bonus' => 'required',
        'jabatan_id' => 'required',

       
    ]);

    // Gunakan metode create untuk menyimpan data ke database
    gaji::create($validateData);

    return redirect('/gaji-backend')->with('success', 'Data berhasil disimpan');
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
       
            $gajis = gaji::find($id);
            $jabatans = Jabatan::all();
            $pegawais = Pegawai::all();
            return view('gaji.edit', compact('gajis', 'jabatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'besaran'=>'required',
            'bonus'=>'required',
            'jabatan_id'=>'required',
            
        ]);
        // Cari data berdasarkan id
        $data = gaji::findOrFail($id);
        // Lakukan perubahan data
        $data->update($validatedData);

        return redirect()->route('gaji.index');
        return redirect('/gaji-backend')->with('pesan','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        gaji::destroy($id);
        return redirect('/gaji-backend')->with('pesan','Data Berhasil di Hapus');
    }
}
