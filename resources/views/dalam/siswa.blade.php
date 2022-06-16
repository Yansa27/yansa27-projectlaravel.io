@extends('dalam.dashboard')
@section('judul','tambahguru')
@section('konten')

<div class="container">
      <div class="row">
      <div class="col-10">
      <h1 class="mt-3">Halaman Daftar Siswa</h1>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NISN</th>
      <th scope="col">Kelas</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($mahasiswa as $swa)
    <tr>
     <th scope="row">{{$loop->iteration}}</th>
      <td>{{$swa->nama}}</td>
      <td>{{$swa->nisn}}</td>
      <td>{{$swa->kelas}}</td>
      <td>{{$swa->email}}</td>
      <td>
      <div class="btn-group">
      <form action="siswa/{{ $swa->id }}" method="post" class="d-inline">
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