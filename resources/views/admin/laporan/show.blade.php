@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Laporan') }}</div>

                <div class="card-body">
                    <form  action="{{route('laporan.index', $laporan->id)}}" method="post">
                        <input type="hidden" name="_method" value="GET">
                            @csrf
                            <div class="card-body">
                            <div class="from-group">
                                <label for="">Nama Provinsi</label>
                                <select name="id_provinsi" id="" class="form-control" name="id_provinsi[]">
                                    @foreach ($provinsi as $item)
                                        <option value="{{$item->id}}">{{$item->nama_provinsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="from-group">
                                <label for="">Nama Kota</label>
                                <select name="id_kota" id="" class="form-control" name="id_kota[]">
                                    @foreach ($kota as $item)
                                        <option value="{{$item->id}}">{{$item->nama_kota}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="from-group">
                                <label for="">Nama Kecamatan</label>
                                <select name="id_kecamatan" id="" class="form-control" name="id_kecamatan[]">
                                    @foreach ($kecamatan as $item)
                                        <option value="{{$item->id}}">{{$item->nama_kecamatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="from-group">
                                <label for="">Nama Kelurahan</label>
                                <select name="id_kelurahan" id="" class="form-control" name="id_kelurahan[]">
                                    @foreach ($kelurahan as $item)
                                        <option value="{{$item->id}}">{{$item->nama_kelurahan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="from-group">
                                <label for="">Nama Rw</label>
                                <select name="id_rw" id="" class="form-control" name="id_rw[]">
                                    @foreach ($rw as $item)
                                        <option value="{{$item->id}}">{{$item->nama_rw}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                                Tambah Data Kota
                            </div>
                            <div class="card-body">
                                    @csrf
                                    <div class="from-group">
                                        <label for="">Nama Provinsi</label>
                                        <select name="id_provinsi" id="" class="form-control" name="id_provinsi[]">
                                            @foreach ($provinsi as $item)
                                                <option value="{{$item->id}}">{{$item->nama_provinsi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="from-group">
                                        <label for="">Jumlah Posiif</label>
                                        <input type="text" name="jumlah_positif" class="form-control" value="{{$kasus->jumlah_positif}}" readonly>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Jumlah meninggal</label>
                                        <input type="text" name="jumlah_meninggal" class="form-control" value="{{$kasus->jumlah_meninggal}}" readonly>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Jumlah sembuh</label>
                                        <input type="text" name="jumlah_sembuh" class="form-control" value="{{$kasus->jumlah_sembuh}}" readonly>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" value="{{$kasus->tanggal}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block"> Simpan </button>
                                    </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection