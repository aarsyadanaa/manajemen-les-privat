@extends('Superadmin.layout.index')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Navdaa | Cendikia</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h4>Edit Absen</h4>
                <form role="form" method="post" action="{{ url('/superadmin/absen/edit/'.$absen->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                        <br>
                        <div class="form-group"  style="width: 50%;">
                          <label for="user">Nama Siswa</label>
                          <select name="id_siswa" class="c-form-profession form-control" id="c-form-profession">
                          <option  value="{{ $absen->id_siswa }}">{{ $nama }}</option>
                          @foreach($nama1 as $nama1)
                          <?php $options=$nama1->nama_siswa ?>
                          <option  value="{{$nama1->id}}"  {{($nama1 ==$options)? 'selected':'' }}>{{$nama1->nama_siswa}}</option><br>
                          @endforeach
                          </select></div><br>

                          <label for="tanggal">Tanggal</label>
                          <input type="date" style="width: 50%;" class="form-control" name="tanggal" value="{{ $absen->tanggal}}">
                          </div>
                          <div class="form-group"><br>
                          <label for="materi">Materi</label>
                          <input type="text" style="width: 50%;" class="form-control" name="materi" placeholder="ex. matematika, ips" value="{{ $absen->materi}}">
                          </div>
                          <div class="form-group"><br>
                          <label for="durasi">Durasi</label>
                          <input type="text" style="width: 50%;" class="form-control" name="durasi" placeholder="ex. 70 menit" value="{{ $absen->durasi }}">
                          </div>
                          <div class="form-group"><br>
                          <label for="catatan">Catatan tentang Siswa</label>
                          <input type="text" style="width: 50%;" class="form-control" name="catatan" placeholder="ex. lebih rajin apa gitu" value="{{ $absen->catatan}}">
                          </div>
                          <br>
                  <!-- /.box-body -->
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