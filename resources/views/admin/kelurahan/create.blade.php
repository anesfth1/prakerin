@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                                Tambah Data Kelurahan
                            </div>
                            <div class="card-body">
                                <form action="{{route('kelurahan.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="from-group">
                                        <label for="">Nama Kecamatan</label>
                                        <select name="id_kecamatan" id="" class="form-control" name="id_kelurahan[]">
                                            @foreach ($kecamatan as $item)
                                                <option value="{{$item->id}}">{{$item->nama_kecamatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Nama Kelurahan</label>
                                        <input type="text" name="nama_kelurahan" class="form-control @error ('nama_kelurahan') is-invalid @enderror" value="{{old('nama_kelurahan')}}" >
                                        @error('nama_kelurahan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block" > Simpan </button>
                                    </div>
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection