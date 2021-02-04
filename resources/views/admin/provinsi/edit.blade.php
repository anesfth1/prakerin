@extends('layouts.master')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
             <div class="card-header">
                Edit Data Provinsi
             </div>
             <div class="card-body">
                <form action="{{route('provinsi.update', $provinsi->id)}}" method="post">
                    @csrf @method('put')
                    <div class="form-group">
                       <label for="">Kode Provinsi</label>
                       <input type="text" name="kode_provinsi" class="form-control  @error ('nama_provinsi') is-invalid @enderror" value="{{$provinsi->kode_provinsi}}" required>
                    </div>
                    <div class="form-group">
                       <label for="">Nama Provinsi</label>
                       <input type="text" name="nama_provinsi" class="form-control @error ('nama_provinsi') is-invalid @enderror" value="{{$provinsi->nama_provinsi}}" required>
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