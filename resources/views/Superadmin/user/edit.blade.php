@extends('Karyawan.layout.index')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Cutiie</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h4>Edit Karyawan</h4>
                <form role="form" method="post" action="{{ url('/superadmin/user/edit/'.$user->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                <label for="name">Nama</label>
                <input type="name" style="width: 50%;" class="form-control" name="name" placeholder="Nama" value="{{$user->name }}">
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" style="width: 50%;" class="form-control" name="email" placeholder="email" value="{{ $user->email }}">
                </div>
                <div class="form-floating">   
                <label for="role_id">Privilage : </label>
                <!-- gunakan event onchange untuk mengirim data secara otomatis  -->
                <br>
                <br>
                <select class="form-control" name="role_id" onChange="document.getElementById('form_id').submit();">
                    <option value="{{ $user->role_id}}"></option>
                    <option <?php if(!empty($cari)){ echo $cari == '1' ? 'selected':''; } ?> value="1">Superadmin</option>
                    <option <?php if(!empty($cari)){ echo $cari == '2' ? 'selected':''; } ?> value="2">PIC</option>
                    <option <?php if(!empty($cari)){ echo $cari == '3' ? 'selected':''; } ?> value="3">Karyawan</option>
                </select>
                </div>
                </div>
                <br>
                  <!-- /.box-body -->
                  <br>
                  <div class="box-footer">
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
@endsection