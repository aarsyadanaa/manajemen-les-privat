@extends('Karyawan.layout.index')
@section('content')
<section class="home" id="home">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div
              class="home-content"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <p class="badge fs-6 bg-primary-light text-primary">
              <h4>Selamat datang<b style="text-transform: capitalize; "> {{Auth::user()->name}} </b>di website pengajuan cuti online</h4>
              </p>
             
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Home Section Close -->
    @endsection