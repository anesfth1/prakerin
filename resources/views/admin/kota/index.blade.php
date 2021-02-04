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
                        <div class="card-header">Kota
                                <a href="{{route('kota.create')}}" class="float-right btn btn-primary">Tambah Data</a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Provinsi</th>
                                                    <th>Nama Kota</th>
                                                    <th>
                                                       <center>Action</center>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($kota as $item)
                                                <tr>
                                                    <th >{{$no++}}</th>
                                                    <th>{{$item->provinsi->nama_provinsi}}</th>
                                                    <th>{{$item->nama_kota}}</th>
                                                    <td>
                                                        <form action="{{route('kota.destroy', $item->id)}}" method="POST">
                                                            @csrf @method('delete')
                                                            <a href="{{route('kota.edit', $item->id)}}" class="btn btn-warning btn-small fay fay-eye">Edit</a>
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