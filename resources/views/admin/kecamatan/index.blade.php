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
                        <div class="card-header">Kelurahan
                                <a href="{{route('kecamatan.create')}}" class="float-right btn btn-primary">Tambah Data</a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Kota</th>
                                                        <th>Kode Kecamatan</th>
                                                        <th>Nama Kecamatan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($kecamatan as $item)
                                                    <tr>
                                                        <th >{{$no++}}</th>
                                                        <th>{{$item->kota->nama_kota}}</th>
                                                        <th>{{$item->kode_kecamatan}}</th>
                                                        <th>{{$item->nama_kecamatan}}</th>
                                                        <td>
                                                        <form action="{{route('kecamatan.destroy', $item->id)}}" method="POST">
                                                            @csrf @method('delete')
                                                            <a href="{{route('kecamatan.edit', $item->id)}}" class="btn btn-warning btn-small fay fay-eye">Edit</a>
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