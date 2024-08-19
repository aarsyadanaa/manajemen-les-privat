@extends('Superadmin.layout.index')
@section('content')
<div class="container">
<div class="jumbotron">
<br><br>
<h1 class="display-6">Tambah Data Siswa</h1>
<hr class="my-4">     
<form action="create/post" method="POST" enctype="multipart/form-data">
@csrf
<br>
<div class="form-group">
<label for="nama_siswa">Nama Siswa</label>
<input type="text" style="width: 50%;" class="form-control" name="nama_siswa" placeholder="ex. Suparjo" value="{{ old('nama_siswa') }}"></div>
<div class="form-group"><br>
<label for="ttl_siswa">Tempat Tanggal Lahir</label>
<input type="text" style="width: 50%;" class="form-control" name="ttl_siswa" placeholder="ex. sragen, 29 februari 2002" value="{{ old('ttl_siswa') }}">
</div>
<div class="form-group"><br>
<label for="nama_ortu">Nama Orang Tua</label>
<input type="text" style="width: 50%;" class="form-control" name="nama_ortu" placeholder="ayah/ibu" value="{{ old('nama_ortu') }}">
</div>
<div class="form-group"><br>
<label for="nama_sekolah">Nama Sekolah</label>
<input type="text" style="width: 50%;" class="form-control" name="nama_sekolah" placeholder="mana gitu" value="{{ old('nama_sekolah') }}">
</div>
<div class="form-group"><br>
<label for="kelas">Kelas</label>
<input type="text" style="width: 50%;" class="form-control" name="kelas" placeholder="angka aja" value="{{ old('kelas') }}">
</div>
<div class="form-group"><br>
<label for="alamat">Alamat</label>
<input type="text" style="width: 50%;" class="form-control" name="alamat" placeholder="alamat lengkap" value="{{ old('alamat') }}">
</div>
<div class="form-group"><br>
<label for="no_telp">No Telepon</label>
<input type="text" style="width: 50%;" class="form-control" name="no_telp" placeholder="087xxxxx" value="{{ old('no_telp') }}">
</div>
<br>
<button type="submit" class="btn btn-success">Simpan</button>
</form></div>
@endsection
