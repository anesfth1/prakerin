@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('succes'))
                        <div class="alert alert-success" role="alert">
                            {{ session('succes') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">laporan
                                <a href="{{route('laporan.create')}}" class="float-right btn btn-primary"> Tambah </a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Lokasi</th>
                                                        <th>Rw</th>
                                                        <th>Jumlah Positif</th>
                                                        <th>Jumlah Sembuh</th>
                                                        <th>Jumlah Meninggal</th>
                                                        <th>Tanggal</th>
                                                        <th>
                                                           <center>Action</center>
                                                        </th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($laporan as $item)  
                                                    <tr>
                                                        <th >{{$no++}}</th>
                                                        <td><center>Kelurahan : {{$item->rw->kelurahan->nama_kelurahan}}<br>
                                                            Kecamatan : {{$item->rw->kelurahan->kecamatan->nama_kecamatan}}<br>
                                                            Kota : {{$item->rw->kelurahan->kecamatan->kota->nama_kota}}<br>
                                                            Provinsi : {{$item->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}</center></td>
                                                        <th>{{$item->rw->nama_rw}}</th>
                                                        <th>{{$item->jumlah_positif}}</th>
                                                        <th>{{$item->jumlah_sembuh}}</th>
                                                        <th>{{$item->jumlah_meninggal}}</th>
                                                        <th>{{$item->tanggal}}</th>
                                                        <td>
                                                        <form action="{{route('laporan.destroy', $item->id)}}" method="POST">
                                                            @csrf @method('delete')
                                                            <a href="{{route('laporan.edit', $item->id)}}" class="btn btn-success btn-small fay fay-eye">Edit</a>
                                                            <button type="submit" class="btn btn-danger btn-small fay fay-trash" onclick="return confirm('Apakah Data Yakin Dihapus?')">Delete</button>
                                                        </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('master')
<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    });
</script>
@endpush