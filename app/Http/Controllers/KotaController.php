<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = Kota::with('provinsi')->get();
        $provinsi = Provinsi::all();
        return view('admin.kota.index',compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::with('provinsi')->get();
        $provinsi = Provinsi::all();
        return view('admin.kota.create',compact('kota','provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesan=['kode_kota.required' => 'kota Harus Diisi','kode_kota.max' => 'Variable Huruf Melebihin Maksimal!!','kode_kota.unique'=>'Data Sudah Terdaftar!!'];
        $this->validate($request,[ 'kode_kota' => 'required|max:50|unique:kotas'],$pesan);
        $pesan=['nama_kota.required' => 'kota Harus Diisi','nama_kota.max' => 'Variable Huruf Melebihin Maksimal!!','nama_kota.unique'=>'Data Sudah Terdaftar!!'];
        $this->validate($request,[ 'nama_kota' => 'required|max:50|unique:kotas'],$pesan);
        $kota = new Kota();
        $kota->id_provinsi = $request->id_provinsi;
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->save();
        return redirect()->route('kota.index')->with(['succes'=>'Data Berhasil Di Simpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = Kota::findOrFail($id);
        $provinsi = Provinsi::all();
        return view('admin.kota.edit',compact('kota','provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kota = Kota::findOrFail($id);
        $kota->id_provinsi = $request->id_provinsi;
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->save();
        return redirect()->route('kota.index')->with(['succes'=>'Data Berhasil di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();
        return redirect()->route('kota.index')->with(['succes'=>'Data Berhasil Di Hapus']);
    }
}
