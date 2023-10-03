<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KecamatanModel;

class KecamatanController extends Controller
{
    public function index()
    { 
        $data_kecamatan = KecamatanModel::all();
        return view('kecamatan.index', compact('data_kecamatan'));
    }
    
    public function create()
    {
        return view('kecamatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_kecamatan' => 'required',
            'nama_kecamatan' => 'required',
        ]);
        $inputKecamatan = $request->all();
        KecamatanModel::create($inputKecamatan);

        return redirect()->route('kecamatan.index');
    }


    public function edit(Request $request, KecamatanModel $kecamatan)
    {
        return view('kecamatan.edit', compact('kecamatan'));
    }
    public function update(Request $request, KecamatanModel $kecamatan)
    {
        $request->validate([
            'kode_kecamatan' => 'required',
            'nama_kecamatan' => 'required',
        ]);
        $inputKecamatan = $request->all();
        $kecamatan->update($inputKecamatan);

        return redirect()->route('kecamatan.index');
    }
    public function destroy(KecamatanModel $kecamatan)
    {
        $kecamatan->delete();
        return redirect()->route('kecamatan.index');
    }
}
