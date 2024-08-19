@extends('Superadmin.layout.index')
@section('content')
<div class="container">
<div class="jumbotron">
<br><br>
<h1 class="display-6">Tambah Data Cuti</h1>
<hr class="my-4">     
<form action="create/post" method="POST" enctype="multipart/form-data">
@csrf
<br>
<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan</label>
<select name="id_user" class="c-form-profession form-control" id="c-form-profession">
<option  value="{{ old('id_user') }}">Pilih Karyawan</option>
@foreach($nama as $nama)
<?php $options=$nama->nama ?>
<option  value="{{$nama->id_user}}"  {{($nama ==$options)? 'selected':'' }}>{{$nama->nama}}</option>
@endforeach

</select></div><br>

<div style="display:flex;">
<div class="form-group">
<label for="awal_cuti">Awal Cuti</label>
<input type="date" style="width: 100%;" class="form-control" name="awal_cuti" 
                    placeholder="Tanggal mulai cuti" value="{{ old('awal_cuti') }}">
</div>
<div style="padding: 0 30px;" class="form-group">
<label for="akhir_cuti">Akhir Cuti</label>
<input type="date" style="width: 100%;" class="form-control" name="akhir_cuti" placeholder="Tanggal selesai cuti" value="{{ old('akhir_cuti') }}">
</div>
</div>
<br>
<div class="form-group">
<label for="keterangan">Keterangan</label>
<textarea type="text" style="width: 50%;" class="form-control" name="keterangan" placeholder="Alasan Cuti" value="{{ old('keterangan') }}"></textarea>
</div>

@foreach ($cuti as $cuti)
<option value="{{ $cuti->cuti }}">
{{ $cuti->cuti }}</option>
@endforeach
</div>
<br>
<button type="submit" class="btn btn-success">Simpan</button>
</form></div>
@endsection
