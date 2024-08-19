@extends('Pic.layout.index')
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
              <h4>Edit Cuti</h4>
                <form role="form" method="post" action="{{ url('/pic/cuti/edit/'.$cuti->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div style="display:flex;">
                        <div class="form-group">
                        <label for="awal_cuti">Awal Cuti</label>
                        <input type="date" style="width: 100%;" class="form-control" name="awal_cuti" 
                                            placeholder="Tanggal mulai cuti" value="{{$cuti->awal_cuti }}">
                        </div>
                        <div style="padding: 0 30px;" class="form-group">
                        <label for="akhir_cuti">Akhir Cuti</label>
                        <input type="date" style="width: 100%;" class="form-control" name="akhir_cuti" placeholder="Tanggal selesai cuti" value="{{ $cuti->akhir_cuti }}">
                        </div>
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea type="text" class="form-control" name="keterangan" value="{{ $cuti->keterangan }}">{{ $cuti->keterangan }}</textarea>
                        </div>
                        <br>
                  </div>
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