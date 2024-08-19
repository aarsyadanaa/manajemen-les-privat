@extends('Karyawan.layout.index')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container bootstrap snippets bootdey">
<h1 class="text-success">Profile</h1>
<div class="row">
<div class="col-md-9 personal-info">
<div class="alert alert-info alert-dismissable">
<a class="panel-close close" data-dismiss="alert">×</a>
<strong class=" text-success">Lengkapi Profil untuk dapat melanjutkan, jika sudah melengkapi maka anda dapat melanjutkan</strong>
</div>

<h3>Personal info</h3>
@foreach($profil as $profil)
<form class="form-horizontal" role="form">
<div class="form-group">
<label class="col-lg-3 control-label">Nama:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="{{$profil->nama}}">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Alamat:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="{{$profil->alamat}}">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Jabatan:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="{{$profil->jabatan}}">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">No Telepon:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="{{$profil->no_telp}}">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Email:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="{{$email[0]}}">
</div>
</div>
@endforeach
<br>
@if($user == null)
<a href="/karyawan/profil/create"><button type="button" class="btn btn-success">Lengkapi Profil</button></a>
@else
<a href="{{ url('/karyawan/profil/update/'.$profil->id_user) }}"><button type="button" class="btn btn-success">Update Profil</button></a>
@endif

</select>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
@endsection