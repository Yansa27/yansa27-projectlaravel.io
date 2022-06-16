@extends('dalam.dashboard')
@section('judul','guru')
@section('konten')

<div class="container">
      <div class="row">
      <div class="col-10">
      <h1 class="mt-3">Halaman Daftar GURU</h1>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIP</th>
      <th scope="col">Kelas</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($dosen as $swa)
    <tr>
     <th scope="row">{{$loop->iteration}}</th>
      <td>{{$swa->nama}}</td>
      <td>{{$swa->nip}}</td>
      <td>{{$swa->mata_pelajaran}}</td>
      <td>
      <div class="btn-group">
      <form action="guru/{{$swa->id }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
      <a href='#' class="btn btn-primary">Edit</a>

      </td>
    </tr>

    @endforeach
  </tbody>
</table>
      </div>
      </div>
      </div>

      @endsection