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
<h1 class="display-6">Data Karyawan</h1>
<hr class="my-4">           
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">No</th>
<th scope="col">Nama</th>
<th scope="col">Alamat</th>
<th scope="col">Jabatan</th>
<th scope="col">No Telpon </th>
<th></th>
</tr>
</thead>
<tbody>
    <?php $no=1; ?>
@foreach ($kar as $kar)
<tr>
<td style="text-transform: capitalize; ">{{ $no++ }}</td>
<td style="text-transform: capitalize; ">{{ $kar->nama }}</td>
<td style="text-transform: capitalize; ">{{ $kar->alamat }}</td>
<td style="text-transform: capitalize; ">{{ $kar->jabatan }}</td>
<td style="text-transform: capitalize; ">{{ $kar->no_telp }}</td>
<td>
<a href="{{ url('/superadmin/karyawan/edit/'.$kar->id) }}" ><button type="submit" class="badge btn-primary mb-1">Edit</button></a>  
<form method="post" action="{{ url('/superadmin/karyawan/hapus/'.$kar->id) }}"> 
    @csrf 
    {{ method_field('delete') }} 
    <button type="submit" class="badgehps badge btn-warning mb-1 " >Hapus</button> </form>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.badgehps').click(function(e){
              var result = confirm("Yakin Hapus?");
              if (result) {
                      
              }else{
                    e.preventDefault();
              }
        })
    })
</script>
</div>
@endsection