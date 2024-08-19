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
<h1 class="display-6">Data User</h1>
<hr class="my-4">   
<a href="user/create" class="btn btn-success mb-1">Tambah User</a>         
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">No</th>
<th scope="col">Nama</th>
<th scope="col">Email</th>
<th scope="col">Privilage</th>
<th></th>
</tr>
</thead>
<tbody>
    <?php $no=1; ?>
@foreach ($user as $user)
<tr>
<td style="text-transform: capitalize; ">{{ $no++ }}</td>
<td style="text-transform: capitalize; ">{{ $user->name }}</td>
<td style="text-transform: capitalize; ">{{ $user->email }}</td>
@if($user->role_id == '1')
<td style="text-transform: capitalize; ">Superadmin/HRD</td>
@elseif($user->role_id == '2')
<td style="text-transform: capitalize; ">PIC</td>
@else
<td style="text-transform: capitalize; ">Karyawan</td>
@endif
<td>
<a href="{{ url('/superadmin/user/edit/'.$user->id) }}" ><button type="submit" class="badge btn-primary mb-1">Edit</button></a>  
<form method="post" action="{{ url('/superadmin/user/hapus/'.$user->id) }}"> 
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