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
<h1 class="display-6">Histori Cuti</h1>
<hr class="my-4">          
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">No</th>
<th scope="col">Nama</th>
<th scope="col">Jabatan</th>
<th scope="col">Awal Cuti</th>
<th scope="col">Akhir Cuti</th>
<th scope="col">Keterangan </th>
<th scope="col">Status</th>
<th></th>
</tr>
</thead>
<tbody>
    <?php $no=1; ?>
@foreach ($cuti as $cuti)
<tr>
<td style="text-transform: capitalize; ">{{ $no++ }}</td>
<td style="text-transform: capitalize; ">{{ $cuti->nama }}</td>
<td style="text-transform: capitalize; ">{{ $cuti->jabatan }}</td>
<td style="text-transform: capitalize; ">{{ $cuti->awal_cuti }}</td>
<td style="text-transform: capitalize; ">{{ $cuti->akhir_cuti }}</td>
<td style="text-transform: capitalize; ">{{ $cuti->keterangan }}</td>
<td style="text-transform: capitalize; ">{{ $cuti->status_2 }}</td>
<td>
<form method="post" action="{{ url('/superadmin/histori/hapus/'.$cuti->id) }}"> 
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