<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KecamatanModel;
use App\Models\KelurahanModel;

class KelurahanController extends Controller
{
    public function index()
    { 
        // $data_kelurahan = KelurahanModel::all();
        $data_kelurahan = DB::table('T_KELURAHAN')
            ->join('T_KECAMATAN', 'T_KELURAHAN.kode_kecamatan', '=', 'T_KECAMATAN.kode_kecamatan')
            ->select('T_KELURAHAN.*', 'T_KECAMATAN.nama_kecamatan')
            ->get();
        return view('kelurahan.index', compact('data_kelurahan'));
    }
    
    public function create()
    {
        // $nama_kecamatan = DB::table('T_KECAMATAN')->value('nama_kecamatan');
        // $kode_kecamatan = DB::table('T_KECAMATAN')->value('kode_kecamatan');
        $data_kecamatan = KecamatanModel::all();
        return view('kelurahan.create', compact('data_kecamatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_kelurahan' => 'required',
            'nama_kelurahan' => 'required',
            'kode_kecamatan' => 'required'
        ]);
        $inputKelurahan = $request->all();
        KelurahanModel::create($inputKelurahan);

        return redirect()->route('kelurahan.index');
    }


    public function edit(Request $request, KelurahanModel $kelurahan)
    {
        $data_kecamatan = KecamatanModel::all();
        return view('kelurahan.edit', compact('kelurahan', 'data_kecamatan'));
    }
    public function update(Request $request, KelurahanModel $kelurahan)
    {
        $request->validate([
            'kode_kelurahan' => 'required',
            'nama_kelurahan' => 'required',
            'kode_kecamatan' => 'required'
        ]);
        $inputKelurahan = $request->all();
        $kelurahan->update($inputKelurahan);

        return redirect()->route('kelurahan.index');
    }
    public function destroy(KelurahanModel $kelurahan)
    {
        $kelurahan->delete();
        return redirect()->route('kelurahan.index');
    }
}
