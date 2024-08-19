@extends('Superadmin.layout.index')
@section('content')
<div class="container">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
@endif
<br><br><br><br><br>
<div class="container" style="width: 50%; height: 50%; position: center; border: solid 1px;">
<h1 style="padding: 0 35%;" class="display-6">Anggota PIC</h1>       
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">Nama</th>
<th scope="col">Jabatan</th>
</tr>
</thead>
<tbody>
    <?php $no=1; ?>
<tr>
<td style="text-transform: capitalize; ">{{$nama1->nama ?? 'null'}}</td>
<td style="text-transform: capitalize; ">{{$nama1->jabatan ?? 'null'}}</td>
<tr>
<td style="text-transform: capitalize; ">{{$nama2->nama ?? 'null'}}</td>
<td style="text-transform: capitalize; ">{{$nama2->jabatan ?? 'null'}}</td>
</tr>
<tr>
<td style="text-transform: capitalize; ">{{$nama3->nama ?? 'null'}}</td>
<td style="text-transform: capitalize; ">{{$nama3->jabatan ?? 'null'}}</td>
</tr>
<tr>
<td style="text-transform: capitalize; ">{{$nama4->nama ?? 'null'}}</td>
<td style="text-transform: capitalize; ">{{$nama4->jabatan ?? 'null'}}</td>
</tr>
<tr>
<td style="text-transform: capitalize; ">{{$nama5->nama ?? 'null'}}</td>
<td style="text-transform: capitalize; ">{{$nama5->jabatan ?? 'null'}}</td>
</tr>

</tr>
</tbody>
</table>
<a style="padding: 75%;" href="/superadmin/pic"><button class="btn btn-success mb-1">Kembali</button><br>
</div> 
</div>
</div>
@endsection