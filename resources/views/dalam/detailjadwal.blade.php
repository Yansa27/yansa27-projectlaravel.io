@extends('dalam.dashboard')
@section('judul','tambahguru')
@section('konten')

<div class="container">
      <div class="row">
      <div class="col-10">
      <h1 class="mt-3"> JADWAL PELAJARAN</h1>

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
            <td>
            <div class="btn-group">
      <form action="detailjadwal/{{ $swa->id }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
      <a href='#' class="btn btn-primary">Edit</a>
      </td>
            @endforeach
        </tbody>
</div>
</div>
</div>

@endsection