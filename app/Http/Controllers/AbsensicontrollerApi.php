<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use Illuminate\Http\Request;

class AbsensicontrollerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return absensi::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        return absensi::create($request->all());
    
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
            $absensi = absensi::findOrFail($id);
            $absensi->update($request->all());
    
            return $absensi;}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){$absensi = absensi::findOrFail($id);
        $absensi->delete();

        return 9442;
    }
}
