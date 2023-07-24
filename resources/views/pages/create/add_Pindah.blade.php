@extends('template')
@section('content')
<div class="page-heading">
    <h3>Tambah Pindah</h3>
</div>
<div class="container">
    <form method="POST" action="{{ url('/pindah') }}" >
      @csrf
        <div class="mb-3">
          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" >
        </div>
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" >
        </div>
        <div class="mb-3">
          <label class="form-label">Tempat Tanggal Lahir</label>
          <input type="text" class="form-control" name="tempat_tanggal_lahir" >
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="enum" class="form-control" name="jenis_kelamin" >
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat Asal</label>
            <input type="text" class="form-control" name="alamat_asal" >
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat Tujuan</label>
            <input type="text" class="form-control" name="alamat_tujuan" >
          </div>
          <div class="mb-3">
            <label class="form-label">Alasan Pindah</label>
            <input type="text" class="form-control" name="alasan_pindah" >
          </div>
          <div class="mb-3">
            <label class="form-label">Status surat</label>
            <input type="text" class="form-control" name="status_surat" >
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif
@endSection