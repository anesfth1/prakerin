@extends('layouts.master')

@section('content')
<?php
        $datapositif = file_get_contents("https://api.kawalcorona.com/positif");
        $positif = json_decode($datapositif, TRUE);
        $datasembuh = file_get_contents("https://api.kawalcorona.com/sembuh");
        $sembuh = json_decode($datasembuh, TRUE);
        $datameninggal = file_get_contents("https://api.kawalcorona.com/meninggal");
        $meninggal = json_decode($datameninggal, TRUE);
        $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
        $id = json_decode($dataid, TRUE);
        $dataidprovinsi = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
        $idprovinsi = json_decode($dataidprovinsi, TRUE);
        $datadunia= file_get_contents("https://api.kawalcorona.com/");
        $dunia = json_decode($datadunia, TRUE);
?>
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p>TOTAL POSITIF</p>
                    <h1 class="text-center"><b><?php echo $positif['value'] ?></b></h1>
                    <p class="text-center">ORANG</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p>TOTAL SEMBUH</p>
                    <h1><b><?php echo $sembuh['value'] ?></b></h1>
                    <p>ORANG</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body"> 
                    <p>TOTAL MENINGGAL</p>
                    <h1><b><?php echo $meninggal['value'] ?></b></h1>
                    <p>ORANG</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p>INDONESIA</p>
                <div class="text-center">
                <h4><b><span data-toggle="counter-up"><?php ['positif'] ?></span></b> POSITIF<br>
                <b><span data-toggle="counter-up"><?php ['sembuh'] ?></span></b> SEMBUH <b>
                <span data-toggle="counter-up"><?php ['meninggal'] ?></span></b> MENINGGAL</h4>
                <p><b>ORANG</b></p>
            </div>
        </div>
    </div>
</div>

@endsection

