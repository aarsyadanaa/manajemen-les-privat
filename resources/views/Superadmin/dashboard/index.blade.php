@extends('Superadmin.layout.index')
@section('content')
<section class="home" id="home">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-15">
            <div
              class="home-content"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <p class="badge fs-6 bg-primary-light text-primary">
              <h4>Halo <b style="text-transform: capitalize; "> Nobab
            </b>, kamu saat ini memiliki siswa {{$siswa}} dan tetap SEMANGAT!!!</h4>
              </p>
              <br><a href="/superadmin/absen/create"><button class="btn btn-success">Buat Absen</button></a><br>
             <img src="img/semangat.png" style="margin-left: 30%; width: 30%; height: 30%;">
             
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Home Section Close -->
    @endsection