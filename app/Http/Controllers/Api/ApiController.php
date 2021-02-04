<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Rw;
use App\Models\Kasus;
use DB;
use Carbon\Carbon;

class ApiController extends Controller
{


    // Rekap PerDays
    public function day()
    {
        $days = DB::table('provinsis')
            ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
            DB::raw('SUM(kasuses.jumlah_positif) as jumlah_positif'),
            DB::raw('SUM(kasuses.jumlah_sembuh) as jumlah_sembuh'),
            DB::raw('SUM(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
            ->groupBy('provinsis.id')->get();

        $positif = DB::table('provinsis')
            ->join('kotas','kotas.id_provinsi','=','provinsis.id')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasuses','kasuses.id_rw','=','rws.id')
            ->select('kasuses.jumlah_positif',
                'kasuses.jumlah_sembuh','kasuses.jumlah_meninggal')
            ->sum('kasuses.jumlah_positif');

        $sembuh = DB::table('provinsis')
            ->join('kotas','kotas.id_provinsi','=','provinsis.id')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasuses','kasuses.id_rw','=','rws.id')
            ->select('kasuses.jumlah_positif',
                'kasuses.jumlah_sembuh','kasuses.jumlah_meninggal')
            ->sum('kasuses.jumlah_sembuh');

        $meninggal = DB::table('provinsis')
            ->join('kotas','kotas.id_provinsi','=','provinsis.id')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasuses','kasuses.id_rw','=','rws.id')
            ->select('kasuses.jumlah_positif',
                'kasuses.jumlah_sembuh','kasuses.jumlah_meninggal')
            ->sum('kasuses.jumlah_meninggal');
       
            return response([
                'success' => true,
                'data' => ['Hari Ini' => $days,
                          ],
                'Total' => ['Jumlah Positif'   => $positif,
                            'Jumlah Sembuh'    => $sembuh,
                            'Jumlah Meninggal' => $meninggal,
                          ],
                'message' => 'Berhasil'
            ], 200);
    }

    // List Semua Data
    public function index()
    {
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
            return response()->json($provinsi, 200);    
    }

    // Show Data
    public function show($id)
        {
        $provinsi = Provinsi::findOrFail($id);
        $all = DB::table('provinsis')
            ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
            DB::raw('SUM(kasuses.jumlah_positif) as jumlah_positif'),
            DB::raw('SUM(kasuses.jumlah_sembuh) as jumlah_sembuh'),
            DB::raw('SUM(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->where('provinsis.id',$id)
                ->groupBy('provinsis.id')
                ->get();
            $toDay = DB::table('provinsis')
            ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
            DB::raw('SUM(kasuses.jumlah_positif) as jumlah_positif'),
            DB::raw('SUM(kasuses.jumlah_sembuh) as jumlah_sembuh'),
            DB::raw('SUM(kasuses.jumlah_meninggal) as jumlah_meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->where('provinsis.id',$id)
                ->whereDate('kasuses.tanggal',Carbon::today())
                ->groupBy('provinsis.id')
                ->get();
                return response([
                    'success' => true,
                    'data' => ['Hari Ini' => $toDay,
                                'Semua' => $all
                                ],
                    'message' => 'Berhasil'
                ], 200);
        }

    // Rekap Semua Data Kasus Provinsi
    public function all()
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

            return response([
                'success' => true,
                'data' => 'Data Indonesia',
                          'Jumlah Positif'   => $positif,
                          'Jumlah Sembuh'    => $sembuh,
                          'Jumlah Meninggal' => $meninggal,        
                'message' => 'Berhasil'
            ], 200);
    }
}
