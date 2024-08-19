@extends('Karyawan.layout.index')
@section('content')
<div class="container">
<div class="jumbotron">
<br><br>
<h1 class="display-6">Lengkapi Profil Anda</h1>
<hr class="my-4">     
<form action="create/post" method="POST" enctype="multipart/form-data">
@csrf
<br>
<div class="form-group">
<label for="nama">Nama Anda</label>
<input type="text" class="form-control" name="nama" 
                    placeholder="Sesuai KTP" value="{{ old('nama') }}">
</div>
<div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" name="alamat" placeholder="Sesuai KTP" value="{{ old('alamat') }}">
</div>

<div class="form-group">
<label for="jabatan">Jabatan</label>
<input type="text" class="form-control" name="jabatan" placeholder="Posisi Kerja Anda" value="{{ old('jabatan') }}">
</div>

<div class="form-group">
<label for="no_telp">Nomor Telepon Aktif</label>
<input type="text" class="form-control" name="no_telp" placeholder="08xxxxxx" value="{{ old('no_telp') }}">
</div>
@foreach ($create as $create)
<option value="{{ $create->create }}">
{{ $create->create }}</option>
@endforeach
</div>
<button type="submit" class="btn btn-success">Simpan</button>
</form></div>
@endsection
