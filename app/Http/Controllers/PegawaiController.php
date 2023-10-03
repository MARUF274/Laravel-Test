<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KecamatanModel;
use App\Models\KelurahanModel;
use App\Models\PegawaiModel;
use App\Models\ProvinsiModel;

class PegawaiController extends Controller
{
    public function index()
    { 
        // $data_pegawai = KelurahanModel::all();
        $data_pegawai = DB::table('T_PEGAWAI')
            ->join('T_KECAMATAN', 'T_PEGAWAI.kode_kecamatan', '=', 'T_KECAMATAN.kode_kecamatan')
            ->join('T_PROVINSI', 'T_PEGAWAI.kode_provinsi', '=', 'T_PROVINSI.kode_provinsi')
            ->join('T_KELURAHAN', 'T_PEGAWAI.kode_kelurahan', '=', 'T_KELURAHAN.kode_kelurahan')
            ->select('T_PEGAWAI.*', 'T_KECAMATAN.nama_kecamatan', 'T_KELURAHAN.nama_kelurahan', 'T_PROVINSI.nama_provinsi')
            ->get();

        return view('pegawai.index', compact('data_pegawai'));
    }
    
    public function create()
    {
        // $nama_kecamatan = DB::table('T_KECAMATAN')->value('nama_kecamatan');
        // $kode_kecamatan = DB::table('T_KECAMATAN')->value('kode_kecamatan');
        $data_kecamatan = KecamatanModel::all();
        $data_provinsi = ProvinsiModel::all();
        $data_kelurahan = KelurahanModel::all();
        
        return view('pegawai.create', compact('data_kecamatan', 'data_provinsi', 'data_kelurahan'));
    }

    public function store(Request $request)
    {
        $request->validate([
'nama_pegawai' => 'required',
'tempat_lahir' => 'required',
'tanggal_lahir' => 'required',
'jenis_kelamin' => 'required',
'agama' => 'required',
'alamat' => 'required',
'kode_kecamatan' => 'required',
'kode_kelurahan' => 'required',
'kode_provinsi' => 'required'
        ]);

        $inputPegawai = $request->all();
        PegawaiModel::create($inputPegawai);

        return redirect()->route('pegawai.index');
    }


    public function edit(Request $request, PegawaiModel $pegawai)
    {
        $data_kecamatan = KecamatanModel::all();
        $data_provinsi = ProvinsiModel::all();
        $data_kelurahan = KelurahanModel::all();
        
        return view('pegawai.edit', compact('data_kecamatan', 'data_provinsi', 'data_kelurahan', 'pegawai'));
    }
    public function update(Request $request, PegawaiModel $pegawai)
    {
        $request->validate([
            'nama_pegawai' => 'required',
'tempat_lahir' => 'required',
'tanggal_lahir' => 'required',
'jenis_kelamin' => 'required',
'agama' => 'required',
'alamat' => 'required',
'kode_kecamatan' => 'required',
'kode_kelurahan' => 'required',
'kode_provinsi' => 'required'
        ]);
        $inputPegawai = $request->all();
        $pegawai->update($inputPegawai);

        return redirect()->route('pegawai.index');
    }
    public function destroy(PegawaiModel $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index');
    }
}
