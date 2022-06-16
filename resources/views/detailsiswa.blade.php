@extends('template')
@section('judul','detailsiswa')
@section('konten')
<div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3"> HALAMAN DETAIL SISWA {{$mahasiswa->nama}} </h1>



    <div class="card">
    <div class="card-body">
    <h1 class="card-title">Nama : {{ $mahasiswa->nama }} </h1>
    <h2 class="card-subtitle mb-2 text-muted">Nisn :{{ $mahasiswa->nisn }}</h2>
    <h2 class="card-subtitle mb-2 text-muted">Kelas :{{ $mahasiswa->kelas }}</h2>
    <p class="card-text">Email :{{ $mahasiswa->email }}</p>
    <a href="/datasiswa" class="btn btn-warning">kembali</a>
  </div>
</div>




    </h1>
    </div>
    </div>
    </div>



@endsection