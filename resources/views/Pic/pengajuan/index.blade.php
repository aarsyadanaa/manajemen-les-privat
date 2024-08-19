@extends('Pic.layout.index')
@section('content')
<style>
    .satu{
        width: 20%;
    }
    .dua{
        width: 80%;
    }
    th,td {
        border: 1px solid grey;
        border-left: 0px solid ;
        border-top: 0px solid black;
        border-right: 0px solid black;

        padding: 15px;
    }
</style>
<div class="container">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
@endif
<br><br><br><br><br>
<h1 class="display-6">Daftar Pengajuan Cuti</h1>
<hr class="my-4">  
<div style="display: flex;">        
    <table class="satu">
        <thead>
        <tr>
            <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nama as $nama)
        <tr>
            <th  scope="col">{{$nama->nama}}</th>
        </tr>
        @endforeach
        </tbody>
    </table>
<!-- batas -->
    <table class="dua">
        <thead>
        <tr>
        <th scope="col">Awal Cuti</th>
        <th scope="col">Akhir Cuti</th>
        <th scope="col">Keterangan </th>
        <th scope="col">Status </th>
            </tr>
        </thead>
        <tbody>
            @foreach($cuti1 as $cuti)
        <tr>
        <td style="text-transform: capitalize; ">{{ $cuti->awal_cuti }}</td>
        <td style="text-transform: capitalize; ">{{ $cuti->akhir_cuti }}</td>
        <td style="text-transform: capitalize; ">{{ $cuti->keterangan }}</td>
        <td style="text-transform: capitalize; ">{{ $cuti->status_1 }}</td>
        <td>
            <a href="{{ url('/pic/pengajuan/edit/'.$cuti->id) }}" ><button type="submit" class="badge btn-primary mb-1">Edit</button></a>  
            <form method="post" action="{{ url('/pic/pengajuan/hapus/'.$cuti->id) }}"> 
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