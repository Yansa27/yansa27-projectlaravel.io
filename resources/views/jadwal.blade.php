@extends('template')
@section('judul','login')
@section('konten')
<div class="container">
    <div class="row">
    <h1 class="mt-3">JADWAL PELAJARAN</h1>

<table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>SENIN</th>
                <th>SELASA</th>
                <th>RABU</th>
                <th>KAMIS</th>
                <th>JUM'AT</th>
                <th>SABTU</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($jadwal as $swa)
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$swa->senin}}</td>
            <td>{{$swa->selasa}}</td>
            <td>{{$swa->rabu}}</td>
            <td>{{$swa->kamis}}</td>
            <td>{{$swa->jumat}}</td>
            <td>{{$swa->sabtu}}</td>
            </tr>
            @endforeach
        </tbody>
</div>
</div>
</div>

@endsection