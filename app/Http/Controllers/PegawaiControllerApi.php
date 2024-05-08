<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pegawai::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        return Pegawai::create($request->all());
    
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $pegawai = Pegawai::findOrFail($id);
            $pegawai->update($request->all());
    
            return $pegawai;}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){$pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return 9442;
    }
}

