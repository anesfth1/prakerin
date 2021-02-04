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
                                <form action="{{route('laporan.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @livewireScripts
                                    @livewire('tracking-data')
                                    @livewireStyles
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block"> Simpan </button>
                                    </div>
                                </form>
                            </div>
                        </div> 
                </div>
            </div>
        </div>
    </div>
@endsection