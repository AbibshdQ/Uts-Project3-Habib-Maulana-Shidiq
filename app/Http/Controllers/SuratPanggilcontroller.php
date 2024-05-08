<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\surat_panggilan;
use Illuminate\Http\Request;

class SuratPanggilcontroller extends Controller
{  /**
    * Display a listing of the resource.
    */
   public function index()
   {
       // Mengambil data surat_panggilan dari database menggunakan model surat_panggilan
       $surat_panggilans = surat_panggilan::all();
       
       // Mengirim data surat_panggilan ke view 'surat_panggilan.index'
       return view('surat_panggilan.index', ['surat_panggilans' => $surat_panggilans]); 
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
        return view('surat_panggilan.create', [
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
       'tgl_panggilan' => 'required',
       'jam' => 'required',
       'tempat_panggil' => 'required',
       'tgl_jbtan' => 'required',
       'ket_panggil' => 'required',
       'nama_pemeriksa' => 'required',
        'id_pegawai' => 'required',

   ]);

   // Gunakan metode create untuk menyimpan data ke database
   surat_panggilan::create($validateData);

   return redirect('/suratpanggil-backend')->with('success', 'Data berhasil disimpan');
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
       $surat_panggilans = surat_panggilan::find($id);
       $pegawais = Pegawai::all();
       return view('surat_panggilan.edit', compact('surat_panggilans',  'pegawais'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, string $id)
   {
       $validatedData=$request->validate([
        'no_surat' => 'required',
        'tgl_panggilan' => 'required',
        'jam' => 'required',
        'tempat_panggil' => 'required',
        'tgl_jbtan' => 'required',
        'ket_panggil' => 'required',
        'nama_pemeriksa' => 'required',
        'id_pegawai' => 'required',

       ]);
       // Cari data berdasarkan id
       $data = surat_panggilan::findOrFail($id);
       // Lakukan perubahan data
       $data->update($validatedData);

    //    return redirect()->route('surat_panggilan.index');
       return redirect('/suratpanggil-backend')->with('pesan','Data Berhasil di Update');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id)
   {
       surat_panggilan::destroy($id);
       return redirect('/suratpanggil-backend')->with('pesan','Data Berhasil di Hapus');
   }
}

