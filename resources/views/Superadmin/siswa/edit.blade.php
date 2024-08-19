@extends('Superadmin.layout.index')
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
              <h4>Edit Siswa</h4>
                <form role="form" method="post" action="{{ url('/superadmin/siswa/edit/'.$siswa->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                        <br>
                    <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input type="text" style="width: 50%;" class="form-control" name="nama_siswa" placeholder="ex. Suparjo" value="{{$siswa->nama_siswa}}"></div>
                    <div class="form-group"><br>
                    <label for="ttl_siswa">Tempat Tanggal Lahir</label>
                    <input type="text" style="width: 50%;" class="form-control" name="ttl_siswa" placeholder="ex. sragen, 29 februari 2002" value="{{$siswa->ttl_siswa}}">
                    </div>
                    <div class="form-group"><br>
                    <label for="nama_ortu">Nama Orang Tua</label>
                    <input type="text" style="width: 50%;" class="form-control" name="nama_ortu" placeholder="ayah/ibu" value="{{$siswa->nama_ortu}}">
                    </div>
                    <div class="form-group"><br>
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input type="text" style="width: 50%;" class="form-control" name="nama_sekolah" placeholder="mana gitu" value="{{$siswa->nama_sekolah}}">
                    </div>
                    <div class="form-group"><br>
                    <label for="kelas">Kelas</label>
                    <input type="text" style="width: 50%;" class="form-control" name="kelas" placeholder="angka aja" value="{{$siswa->kelas}}">
                    </div>
                    <div class="form-group"><br>
                    <label for="alamat">Alamat</label>
                    <input type="text" style="width: 50%;" class="form-control" name="alamat" placeholder="alamat lengkap" value="{{$siswa->alamat}}">
                    </div>
                    <div class="form-group"><br>
                    <label for="no_telp">No Telepon</label>
                    <input type="text" style="width: 50%;" class="form-control" name="no_telp" placeholder="087xxxxx" value="{{$siswa->no_telp}}">
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