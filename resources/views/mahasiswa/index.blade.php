@extends('layout/main')

@section('title', 'Mahasiswa | CahIndo')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-5">Daftar Mahasiswa</h1>

      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NRP</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($mahasiswa as $mhs)
          
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->nrp}}</td>
            <td>{{$mhs->jurusan}}</td>
            <td>
              <a href="" class="btn btn-success">edit</a>
              <a href="" class="btn btn-danger">delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>
@endSection