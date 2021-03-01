@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-body">
                    @if (session('succes'))
                        <div class="alert alert-success" role="alert">
                            {{ session('succes') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">PROVINSI
                                <a href="{{route('provinsi.create')}}" class="float-right btn btn-primary">Tambah Data</a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th class=>No</th>
                                                    <th>Kode Provinsi</th>
                                                    <th>Nama provinsi</th>
                                                    <th>
                                                       <center>Action</center>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ($provinsi as $item)
                                                <tr>
                                                    <th class="text"> {{$no++}}</th>
                                                    <th>{{$item->kode_provinsi}}</th>
                                                    <th>{{$item->nama_provinsi}}</th>
                                                    <td>
                                                        <form action="{{route('provinsi.destroy', $item->id)}}" method="POST">
                                                            @csrf @method('delete')
                                                            <a href="{{route('provinsi.edit', $item->id)}}" class="btn btn-success btn-small fay fay-eye">Edit</a>
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