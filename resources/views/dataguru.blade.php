@extends('template')
@section('judul','dataguru')
@section('konten')
<div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3"> DATA - DATA GURU
    </h1>

    <ul class="list-group">
    @foreach ($dosen as $p)
    <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $p->nama }}
    <a href="/detailguru/{{$p->id}}" class="btn btn-info">detail</a>
    </li>
    @endforeach
    </ul>

    </div>
    </div>
    </div>


@endsection