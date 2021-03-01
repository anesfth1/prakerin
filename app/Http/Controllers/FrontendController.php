<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasus;
use App\Models\RW;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kasus::all();
        $provinsi = DB::table('provinsis')
                    ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
                    DB::raw('SUM(kasuses.jumlah_positif) as jumlah_positif'),
                    DB::raw('SUM(kasuses.jumlah_sembuh) as jumlah_sembuh'),
                    DB::raw('SUM(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                        ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')    
                        ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                        ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                        ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
                        ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                        ->groupBy('provinsis.id')
                        ->get();
            return view('frontend.index', compact('provinsi','data'));
    }
    public function card()
    {
        $positif = DB::table('rws')
              ->select('kasuses.jumlah_sembuh',
              'kasuses.jumlah_positif','kasuses.jumlah_meninggal')
              ->join('kasuses','rws.id','=','kasuses.id_rw')
              ->sum('kasuses.jumlah_positif');
        $sembuh = DB::table('rws')
              ->select('kasuses.jumlah_sembuh',
              'kasuses.jumlah_positif','kasuses.jumlah_meninggal')
              ->join('kasuses','rws.id','=','kasuses.id_rw')
              ->sum('kasuses.jumlah_sembuh');
        $meninggal = DB::table('rws')
              ->select('kasuses.jumlah_sembuh',
              'kasuses.jumlah_positif','kasuses.jumlah_meninggal')
              ->join('kasuses','rws.id','=','kasuses.id_rw')
              ->sum('kasuses.jumlah_meninggal');
            return view('frontend.index', compact('positif','sembuh','meninggal'));
    }
    
}
