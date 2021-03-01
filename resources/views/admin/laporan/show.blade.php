@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Laporan') }}</div>

                <div class="card-body">
                    <form  action="{{route('laporan.index', $laporan->id)}}" method="post">
                        <input type="hidden" name="_method" value="GET">
                        @csrf
                            @method('put')
                            @livewireScripts
                            @livewire('tracking-data',['selectedRw' => $laporan->id_rw, 'idt' => $laporan->id])
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection