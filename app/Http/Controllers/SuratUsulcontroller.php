<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\surat_usul;
use Illuminate\Http\Request;

class SuratUsulcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data surat_usul dari database menggunakan model surat_usul
        $surat_usuls = surat_usul::all();
        
        // Mengirim data surat_usul ke view 'surat_usul.index'
        return view('suratUsulan.index', ['surat_usuls' => $surat_usuls]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('suratUsulan.create',[
            'pegawais'=>Pegawai::all(),
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validateData = $request->validate([
        'no_surat' => 'required',
        'tgl_usulan' => 'required',
        'pengusul' => 'required',
        'alasan_usul' => 'required',
        'jabatan_lama' => 'required',
        'jabatan_baru' => 'required',
        'status_usulan' => 'required',
        'id_pegawai' => 'required',

    ]);

    // Gunakan metode create untuk menyimpan data ke database
    surat_usul::create($validateData);

    return redirect('/suratusul-backend')->with('success', 'Data berhasil disimpan');
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
        $surat_usuls = surat_usul::find($id);
        $pegawais = Pegawai::all();
        return view('suratusulan.edit', compact('surat_usuls','pegawais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'no_surat' => 'required',
            'tgl_usulan' => 'required',
            'pengusul' => 'required',
            'alasan_usul' => 'required',
            'jabatan_lama' => 'required',
            'jabatan_baru' => 'required',
            'status_usulan' => 'required',
             'id_pegawai' => 'required',

        ]);
        // Cari data berdasarkan id
        $data = surat_usul::findOrFail($id);
        // Lakukan perubahan data
        $data->update($validatedData);

        // return redirect()->route('suratusulan.index');
        return redirect('/suratusul-backend')->with('pesan','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        surat_usul::destroy($id);
        return redirect('/suratusul-backend')->with('pesan','Data Berhasil di Hapus');
    }
}
