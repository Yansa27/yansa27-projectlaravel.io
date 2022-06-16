@extends('dalam.dashboard')
@section('judul','dashboard')
@section('konten')


<div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3"> Halaman Tambah Mahasiswa
    </h1>



    <form method="post" action='/datasiswa'>
    @csrf
  <div class="mb-1 col-5">
    <label for="nama" class="form-label">Nama</label>
    <input class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" require>
  </div>
  <div class="mb-3 col-5">
    <label for="npm" class="form-label">NISN</label>
    <input class="form-control @error('nama') is-invalid @enderror" id="nisn" placeholder="nisn 9 karakter" name="nisn">
  </div>
  <div class="mb-3 col-5">
    <label for="email" class="form-label">Email</label>
    <input class="form-control" id="email" placeholder="masukan email" name="email">
  </div>
  <div class="mb-3 col-5">
    <label for="exampleInputPassword1" class="form-label">Kelas</label>
    <input class="form-control" id="kelas" placeholder="masukan Kelas" name="kelas">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>




    </div>
    </div>
    </div>

@endsection