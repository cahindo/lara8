@extends('layout/main')

@section('title', 'Mahasiswa | CahIndo')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-5">Tambah Data Mahasiswa</h1>
      
      <form action="/students" method="post">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="masukan nama" value="{{old('nama')}}">
          @error('nama')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nrp" class="form-label">NRP</label>
          <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="masukan nrp" value="{{old('nrp')}}">
          @error('nrp')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="masukan jurusan" value="{{old('jurusan')}}">
          @error('jurusan')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">SAVE</button>
      </form>
      
    </div>
  </div>
</div>
@endSection