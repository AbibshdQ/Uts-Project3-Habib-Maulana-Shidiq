<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class Pegawaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data pegawai dari database menggunakan model Pegawai
        $pegawais = Pegawai::all();
        
        // Mengirim data pegawai ke view 'pegawai.index'
        return view('pegawai.index', compact('pegawais')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validateData = $request->validate([
        'namapeg' => 'required',
        'j_kel' => 'required',
        'tgl_lahir' => 'required',
        'tmpt_lahir' => 'required',
        'alamat' => 'required',
        'stat_peg' => 'required',
        'tgl_masuk' => 'required',
    ]);

    // Gunakan metode create untuk menyimpan data ke database
    Pegawai::create($validateData);

    return redirect('/pegawai-backend')->with('success', 'Data berhasil disimpan');
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
        return view('pegawai.edit',[
            'pegawais'=>Pegawai::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'namapeg'=>'required',
            'j_kel'=>'required',
            'tgl_lahir'=>'required',
            'tmpt_lahir'=>'required',
            'alamat'=>'required',
            'stat_peg'=>'required',
            'tgl_masuk'=>'required',
        ]);
        // Cari data berdasarkan id
        $data = Pegawai::findOrFail($id);
        // Lakukan perubahan data
        $data->update($validatedData);

        return redirect()->route('pegawai.index');
        return redirect('/pegawai-backend')->with('pesan','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hapus jabatan yang terkait dengan pegawai yang akan dihapus
        Jabatan::where('id_pegawai', $id)->delete();
    
        // Hapus pegawai dari tabel
        Pegawai::destroy($id);
    
        return redirect('/pegawai-backend')->with('pesan', 'Data Berhasil di Hapus');
    }
    
}
