@extends('Superadmin.layout.index')
@section('content')
<div class="container">
<div class="jumbotron">
<br><br>
<h1 class="display-6">Absen</h1>
<hr class="my-4">     
<form action="create/post" method="POST" enctype="multipart/form-data">
@csrf
<br>
<div class="form-group"  style="width: 50%;">
<label for="user">Nama Siswa</label>
<select name="id_siswa" class="c-form-profession form-control" id="c-form-profession">
<option  value="{{ old('id_siswa') }}">Pilih Siswa</option>
@foreach($nama1 as $nama1)
<?php $options=$nama1->nama_siswa ?>
<option  value="{{$nama1->id}}"  {{($nama1 ==$options)? 'selected':'' }}>{{$nama1->nama_siswa}}</option><br>
@endforeach
</select></div><br>

<label for="tanggal">Tanggal</label>
<input type="date" style="width: 50%;" class="form-control" name="tanggal" value="{{ old('tanggal') }}">
</div>
<div class="form-group"><br>
<label for="materi">Materi</label>
<input type="text" style="width: 50%;" class="form-control" name="materi" placeholder="ex. matematika, ips" value="{{ old('materi') }}">
</div>
<div class="form-group"><br>
<label for="durasi">Durasi</label>
<input type="text" style="width: 50%;" class="form-control" name="durasi" placeholder="ex. 70 menit" value="{{ old('durasi') }}">
</div>
<div class="form-group"><br>
<label for="catatan">Catatan tentang Siswa</label>
<input type="text" style="width: 50%;" class="form-control" name="catatan" placeholder="ex. lebih rajin apa gitu" value="{{ old('catatan') }}">
</div>
<br>
<button type="submit" class="btn btn-success">Simpan</button>
</form></div>
@endsection
