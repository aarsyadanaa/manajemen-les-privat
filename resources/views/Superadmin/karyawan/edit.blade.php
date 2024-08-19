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
                <form role="form" method="post" action="{{ url('/superadmin/karyawan/edit/'.$kar->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <textarea type="text" class="form-control" name="nama" value="{{ $kar->nama }}">{{ $kar->nama }}</textarea>
                        </div><br>
                        <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" value="{{ $kar->alamat }}">{{ $kar->alamat }}</textarea>
                        </div><br>
                        <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <textarea type="text" class="form-control" name="jabatan" value="{{ $kar->jabatan }}">{{ $kar->jabatan }}</textarea>
                        </div><br>

                        <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <textarea type="text" class="form-control" name="no_telp" value="{{ $kar->no_telp}}">{{ $kar->no_telp}}</textarea>
                        </div><br>
                  <!-- /.box-body -->
                  <div class="box-footer">
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