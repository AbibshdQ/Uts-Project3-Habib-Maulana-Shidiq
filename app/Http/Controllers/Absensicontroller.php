<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class Absensicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absensis = absensi::all();
        
        
        return view('absensi.index', ['absensis' => $absensis]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('absensi.create', [
            'pegawais'=>Pegawai::all(),
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'tgl_absen' => 'required',
            'stat_absen' => 'required',
            'waktu_tb' => 'required',
            'id_pegawai' => 'required',

            
        ]);
    
        // Gunakan metode create untuk menyimpan data ke database
        absensi::create($validateData);
    
        return redirect('/absensi-backend')->with('success', 'Data berhasil disimpan');
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
            $absensis = absensi::find($id);
            $pegawais = Pegawai::all();
            return view('absensi.edit', compact('absensis', 'pegawais'));
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            $validatedData=$request->validate([
                'tgl_absen'=>'required',
                'stat_absen'=>'required',
                'waktu_tb'=>'required',
                'id_pegawai' => 'required',

                
            ]);
            // Cari data berdasarkan id
            $data = absensi::findOrFail($id);
            // Lakukan perubahan data
            $data->update($validatedData);
    
            return redirect()->route('absensi.index');
            return redirect('/absensi-backend')->with('pesan','Data Berhasil di Update');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            absensi::destroy($id);
            return redirect('/absensi-backend')->with('pesan','Data Berhasil di Hapus');
        }
}
