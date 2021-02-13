@extends('layout/main')

@section('title', 'Mahasiswa | CahIndo')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-5">Daftar Mahasiswa</h1>
      <a href="/students/create" class="btn btn-primary my-3">Tambah Data</a>

      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      
      @foreach ($students as $student)
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$student->nama}}
            <a href="/students/{{$student->id}}" class="badge bg-primary rounded-pill">detail</a>
          </li>
        </ul>
      @endforeach
      
    </div>
  </div>
</div>
@endSection