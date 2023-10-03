<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProvinsiModel;

class ProvinsiController extends Controller
{
    public function index()
    { 
        $data_provinsi = ProvinsiModel::all();
        return view('provinsi.index', compact('data_provinsi'));
    }
    
    public function create()
    {
        return view('provinsi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_provinsi' => 'required',
            'nama_provinsi' => 'required',
        ]);
        $inputProvinsi = $request->all();
        ProvinsiModel::create($inputProvinsi);

        return redirect()->route('provinsi.index');
    }


    public function edit(Request $request, ProvinsiModel $provinsi)
    {
        return view('provinsi.edit', compact('provinsi'));
    }
    public function update(Request $request, ProvinsiModel $provinsi)
    {
        $request->validate([
            'kode_provinsi' => 'required',
            'nama_provinsi' => 'required',
        ]);
        $inputProvinsi = $request->all();
        $provinsi->update($inputProvinsi);

        return redirect()->route('provinsi.index');
    }
    public function destroy(ProvinsiModel $provinsi)
    {
        $provinsi->delete();
        return redirect()->route('provinsi.index');
    }
}
