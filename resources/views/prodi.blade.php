@extends('adminlte::page')

@section('title', 'Prodi')

@section('content_header')
    <h1>Prodi</h1>
@stop

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <div class="card-body">

                {{-- jadi cara pemanggilan menggunakan Name kaya gini --}}
                
                <br><br>
                <table class="table table-bordered table-haver table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 0;
                    foreach ($prodi as $pro):$no++
                    ?>
                        <tr>
                            <td>{{$pro->id}}</td>
                            <td>{{$pro->nama}}</td>
                            
                        </tr>
                       <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>console.log('HI!')</script>
@stop
