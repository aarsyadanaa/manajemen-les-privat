@extends('Pic.layout.index')
@section('content')
<!DOCTYPE html>
<html>
  <br><br><br><br><br>
<head>
    <title>Update Profil</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h4>Update Profil Anda</h4>
                <form role="form" method="post" action="{{ url('/pic/profil/update/'.$karyawan->id_user) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Sesuai KTP" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Sesuai KTP" value="{{ old('alamat') }}">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" placeholder="Posisi Kerja" value="{{ old('jabatan') }}">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon Aktif</label>
                        <input type="text" class="form-control" name="no_telp" placeholder="08xxxxxx" value="{{ old('no_telp') }}">
                    </div>
            </div>
        </div>
        <br>
                <button type="submit" class="btn btn-success">Simpan</button>
                    </form></div>
        </div>
        @endsection
