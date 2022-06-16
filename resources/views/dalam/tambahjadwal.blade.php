@extends('dalam.dashboard')
@section('judul','tambahguru')
@section('konten')

<div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3"> Halaman Tambah Jadwal
    </h1>



    <form method="post" action='/jadwal'>
    @csrf
  <div class="mb-1 col-5">
    <label for="nama" class="form-label">SENIN</label>
    <input class="form-control @error('nama') is-invalid @enderror" id="senin" placeholder="masukan nama" name="senin" require>
  </div>
  <div class="mb-3 col-5">
    <label for="npm" class="form-label">SELASA</label>
    <input class="form-control @error('nama') is-invalid @enderror" id="selasa" placeholder="nisn 9 karakter" name="selasa">
  </div>
  <div class="mb-3 col-5">
    <label for="email" class="form-label">RABU</label>
    <input class="form-control" id="rabu" placeholder="masukan email" name="rabu">
  </div>
  <div class="mb-3 col-5">
    <label for="exampleInputPassword1" class="form-label">KAMIS</label>
    <input class="form-control" id="kamis" placeholder="masukan Kelas" name="kamis">
  </div>
  <div class="mb-3 col-5">
    <label for="exampleInputPassword1" class="form-label">JUM'AT</label>
    <input class="form-control" id="jumat" placeholder="masukan Kelas" name="jumat">
  </div>
  <div class="mb-3 col-5">
    <label for="exampleInputPassword1" class="form-label">SABTU</label>
    <input class="form-control" id="sabtu" placeholder="masukan Kelas" name="sabtu">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>




    </div>
    </div>
    </div>

@endsection