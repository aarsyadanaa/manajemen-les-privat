<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Toekang | Pesen</title>
  </head>
  <body>
    <header>

<!--navbar-->

      <div class="navbar">
        <div class="container">
          <div class="box-navbar">
            <div class="logo">
              <image class="gambar_logo" src="img/logo_tukang.png">
                <h1>Toekang</h1>
            </div>
            <ul class="menu">
              <li><a href="#home">Home</a></li>
              <li><a href="#services">Layanan</a></li>
              <li class="active"><a href="#pantai">Order</a></li>
              <li class="active"><a href="/login">Login</a></li>
              <li class="active"><a href="/register">Daftar</a></li>
            </ul>
            <i class="fa-solid fa-bars menu-bar"></i>
          </div>
        </div>
      </div>

      <div class="hero">
        <div class="container">
          <div class="box-hero">
            <div class="box"  >
              
              <h1>
                Solusi Bangunan Anda <br />
                Cepat dan anti ribet
              </h1>
            
              <p>Adalah layanan online penyedia tukang untuk membuat bangunan yang anda inginkan</p>
              <button>Baca Selengkapnya</button>
            </div>
            <div class="box">
              <img src="img/rumah.jpg"  alt="" />
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Services -->
    <div class="services" id="services">
      <div class="container">
        <div class="box-services">
          <div class="box">
            <i class="fa-solid fa-coins"></i>
            <h4>Harga Terjangkau</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, labore.</p>
          </div>
          <div class="box">
            <i class="fa-solid fa-certificate"></i>
            <h4>Sudah Tersertifikasi</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, labore.</p>
          </div>
          <div class="box">
            <i class="fa-solid fa-people-roof"></i>
            <h4>Aman dan Ramah</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, labore.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Services -->

    <!-- Pantai -->
    <div class="pantai" id="pantai">
      <div class="container">
        <div class="box-pantai">
          <div class="box">
            <img src="img/keramik.jpg" alt="" />
            <h3>Renovation</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <a href="/login"><button>Detail</button></a>
        </div>
          <div class="box">
            <img src="https://cdn.medcom.id/dynamic/content/2021/06/09/1285774/ZCSfpvOVEh.jpg?w=700" alt="" />
            <h3>Build</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          <div class="box">
            <img src="https://i0.wp.com/f1-styx.imgix.net/article/2019/08/30125814/1-18-768x511.jpg?resize=768%2C511&ssl=1" alt="" />
            <h3>Maintance</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, modi.</p>
            <button>Detail</button>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pantai -->

    <!-- Daftar -->
    <div class="daftar" id="daftar">
      <div class="container">
        <div class="box-daftar">
          <h1>
            Ingin Menjadi Tenaga Kerja? <br />
            Daftarkan Diri Anda Sekarang!!
          </h1>
          <h3>Klik Link di Bawah Ini!</h3>
          <button><i class="fa-brands fa-whatsapp"></i> Whatsapp</button>
          <button><i class="fa-regular fa-envelope"></i> Gmail</button>
          <button><i class="fa-regular fa-clipboard"></i> Google Form</button>
        </div>
      </div>
    </div>
    <!-- Daftar -->

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="box-footer">
          <div class="box">
            <h2>Toekang</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eius rerum quisquam perspiciatis obcaecati, quasi temporibus aperiam iusto aliquam doloremque.</p>
          </div>
          <div class="box">
            <h3>Menu</h3>
            <a href="#home">Home</a>
            <a href="#services">Layanan</a>
            <a href="#pantai">Order</a>
            <a href="#daftar">Daftar</a>
          </div>
          <div class="box">
            <p>&copy; Copyright by <span>PKL Bakoel 2023</span> UNS, Indonesia</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->

    <script src="js/script.js"></script>
  </body>
</html>
