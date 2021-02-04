@extends('layouts.master')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
             <div class="card-header">
                Tambah Data Provinsi
             </div>
             <div class="card-body">
                <form action="{{route('provinsi.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                       <label for="">Kode Provinsi</label>
                       <input type="text" name="kode_provinsi" class="form-control  @error ('kode_provinsi') is-invalid @enderror" value="{{old('nm_provinsi')}}" required>
                       @error('kode_provinsi')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                           </span>
                        @enderror
                    </div>
                    <div class="form-group">
                       <label for="">Nama Provinsi</label>
                       <input type="text" name="nama_provinsi" class="form-control  @error ('nama_provinsi') is-invalid @enderror" value="{{old('nm_provinsi')}}" required>
                       @error('nama_provinsi')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                           </span>
                        @enderror
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </form>
             </div>
          </div>
      </div>
   </div>
</div>
@endsection