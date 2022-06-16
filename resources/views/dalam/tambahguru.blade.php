@extends('dalam.dashboard')
@section('judul','tambahguru')
@section('konten')

<div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3"> halaman Tambah Guru
    </h1>



    <form method="post" action='/dataguru'>
    @csrf
  <div class="mb-1 col-5">
    <label for="nama" class="form-label">Nama</label>
    <input class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" require>
  </div>
  <div class="mb-3 col-5">
    <label for="npm" class="form-label">NIP</label>
    <input class="form-control @error('nama') is-invalid @enderror" id="nip" placeholder="npm 9 karakter" name="nip">
  </div>
  <div class="mb-3 col-5">
    <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
    <input class="form-control" id="mata_pelajaran" placeholder="masukan Kelas" name="mata_pelajaran">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
 </form>



    </div>
    </div>
    </div>

@endsection