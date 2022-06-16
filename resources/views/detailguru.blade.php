@extends('template')
@section('judul','detailguru')
@section('konten')
<div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3"> Halaman Detail Guru {{$dosen->nama}} </h1>



    <div class="card">
    <div class="card-body">
    <h1 class="card-title">Nama : {{ $dosen->nama }} </h1>
    <h2 class="card-subtitle mb-2 text-muted">Nip :{{ $dosen->nip }}</h2>
    <h2 class="card-subtitle mb-2 text-muted">Mata Pelajaran :{{ $dosen->mata_pelajaran }}</h2>
    <a href="/datasiswa" class="btn btn-warning">kembali</a>
   </div>
   </div>




    </div>
    </div>
    </div>



@endsection