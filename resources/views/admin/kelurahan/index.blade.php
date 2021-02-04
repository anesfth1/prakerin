@extends('layouts.master')
@push('kelurahan')
active
@endpush
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
                        <div class="card-header">Kecamatan
                                <a href="{{route('kelurahan.create')}}" class="float-right btn btn-primary"> Tambah </a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Kecamatan</th>
                                                        <th>Nama kelurahan</th>
                                                        <th>
                                                            <center>
                                                                Action
                                                            </center>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($kelurahan as $item)
                                                    <tr>
                                                        <th >{{$no++}}</th>
                                                        <th>{{$item->Kecamatan->nama_kecamatan}}</th>
                                                        <th>{{$item->nama_kelurahan}}</th>
                                                        <td> 
                                                          <form action="{{route('kelurahan.destroy', $item->id)}}" method="POST">
                                                                @csrf @method('delete')
                                                                <a href="{{route('kelurahan.edit', $item->id)}}" class="btn btn-warning btn-small fay fay-eye">Edit</a>
                                                                <a href="{{route('kelurahan.show', $item->id)}}" class="btn btn-success btn-small fay fay-eye">Show</a>
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