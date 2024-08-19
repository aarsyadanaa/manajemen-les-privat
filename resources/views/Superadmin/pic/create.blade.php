@extends('Superadmin.layout.index')
@section('content')
<div class="container">
<div class="jumbotron">
<br><br>
<h1 class="display-6">Tambah PIC</h1>
<hr class="my-4">     
<form action="create/post" method="POST" enctype="multipart/form-data">
@csrf
<br>
<div class="form-group"  style="width: 50%;">
<label for="user">Pilih PIC</label>
<select name="id_pic" class="c-form-profession form-control" id="c-form-profession">
<option  value="{{ old('id_pic') }}">Pilih PIC</option>
@foreach($nama1 as $nama1)
<?php $options=$nama1->nama ?>
<option  value="{{$nama1->id_user}}"  {{($nama1 ==$options)? 'selected':'' }}>{{$nama1->nama}}</option><br>
@endforeach
</select></div><br>

<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan 1</label>
<select name="id_kar1" class="c-form-profession form-control" id="c-form-profession">
<option  value="{{ old('id_kar1') }}">Pilih Karyawan 1</option>
@foreach($nama2 as $nama2)
<?php $options=$nama2->nama ?>
<option  value="{{$nama2->id_user}}"  {{($nama2 ==$options)? 'selected':'' }}>{{$nama2->nama}}</option><br>
@endforeach
</select></div><br>

<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan 2</label>
<select name="id_kar2" class="c-form-profession form-control" id="c-form-profession">
<option  value="{{ old('id_kar2') }}">Pilih Karyawan 2</option>
@foreach($nama3 as $nama3)
<?php $options=$nama3->nama ?>
<option  value="{{$nama3->id_user}}"  {{($nama3 ==$options)? 'selected':'' }}>{{$nama3->nama}}</option><br>
@endforeach
</select></div><br>

<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan 3</label>
<select name="id_kar3" class="c-form-profession form-control" id="c-form-profession">
<option  value="{{ old('id_kar3') }}">Pilih Karyawan 3</option>
@foreach($nama4 as $nama4)
<?php $options=$nama4->nama ?>
<option  value="{{$nama4->id_user}}"  {{($nama4 ==$options)? 'selected':'' }}>{{$nama4->nama}}</option><br>
@endforeach
</select></div><br>

<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan 4</label>
<select name="id_kar4" class="c-form-profession form-control" id="c-form-profession">
<option  value="{{ old('id_kar4') }}">Pilih Karyawan 4</option>
@foreach($nama5 as $nama5)
<?php $options=$nama5->nama ?>
<option  value="{{$nama5->id_user}}"  {{($nama5 ==$options)? 'selected':'' }}>{{$nama5->nama}}</option><br>
@endforeach
</select></div><br>

<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan 5</label>
<select name="id_kar5" class="c-form-profession form-control" id="c-form-profession">
<option  value="{{ old('id_kar5') }}">Pilih Karyawan 5</option>
@foreach($nama6 as $nama6)
<?php $options=$nama6->nama ?>
<option  value="{{$nama6->id_user}}"  {{($nama6 ==$options)? 'selected':'' }}>{{$nama6->nama}}</option><br>
@endforeach
</select></div><br>

@foreach ($pici as $pici)
<option value="{{ $pici->pici }}">
{{ $pici->pici }}</option>
@endforeach
</div>
<br>
<button type="submit" class="btn btn-success">Simpan</button>
</form></div>
@endsection
