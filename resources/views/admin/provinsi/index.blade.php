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
                        <div class="card-header">Provinsi
                                <a href="{{route('provinsi.create')}}" class="float-right btn btn-primary">Tambah Data</a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Kode Provinsi</td>
                                                    <td>Nama Provinsi</td>
                                                    <td>
                                                       <center>Aksi</center>
                                                    </td>
                                                    </tr>
                                                    @php $no = 1; @endphp
                                                    @foreach($provinsi as $data)
                                                    <tr>
                                                    <td>{{$no}}</td>
                                                    <td>{{$data->kode_provinsi}}</td>
                                                    <td>{{$data->nama_provinsi}}</td>
                                                    <td>
                                                        <form action="{{route('provinsi.destroy', $data->id)}}" method="POST">
                                                            @csrf @method('delete')
                                                            <a href="{{route('provinsi.edit', $data->id)}}" class="btn btn-warning btn-small fay fay-eye">Edit</a>
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