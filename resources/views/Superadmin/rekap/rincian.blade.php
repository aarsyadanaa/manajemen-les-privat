

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Invoice Navdaa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body{
background:#eee;
margin-top:20px;
}
.text-danger strong {
        	color: grey;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid grey;
			border-top: 12px solid grey;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: grey none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: grey none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			/* font-weight: bold; */
			margin: 0 0 7px 0;
			white-space: nowrap;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
		}
    </style>
</head>
<body>
    <div class="col-md-12">   
        <div class="row">
               
               <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                   <div class="row">
                       <div class="receipt-header">
                           <div class="col-xs-6 col-sm-6 col-md-6">
                               <div class="receipt-left" style="display : flex;">
                                <img class="img-responsive" alt="logo_navda" src="/img/navdaa.png"style="width: 45%;  border-radius: 50%;">
                                <h2 style="margin: 0px 0px 0px 40px; white-space: nowrap;"><b>PRESENSI BELAJAR PRIVAT<br><h2 style="margin: 0px 0px 0px 40px"><b>NAVDAA CENDEKIA<br><h3 style="margin: 0px 0px 0px 40px"><i>"Follow Your Dreams"</i></h3></b></h2></b></h2>
                            </div>
                           </div>
                       </div>
                   </div>
                   
                   <div class="row">
                       <div class="receipt-header receipt-header-mid">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                @foreach ($siswa as $siswa)
                                    <h5>Nama Siswa &emsp;&nbsp;: {{ $siswa->nama_siswa }}</h5>
                                   <h5>Nama Ortu &emsp;&nbsp;&nbsp;&nbsp;: {{ $siswa->nama_ortu }}</h5>
                                   <h5>Nama Sekolah &nbsp;: {{ $siswa->nama_sekolah }}</h5>
                                   <h5>Kelas &emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;: {{ $siswa->kelas }}</h5>
                                   <h5>No.HP &emsp;&emsp;&emsp;&nbsp;&nbsp;: {{ $siswa->no_telp }}</h5>
                                   <h5>Alamat &emsp;&emsp;&emsp;&nbsp;: {{ $siswa->alamat }}</b> </p>
                                   @endforeach
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Tanggal</th>
                                   <th>Materi</th>
                                   <th>Durasi</th>
                                   <th>Paraf</th>
                               </tr>
                           </thead>
                           <tbody>
                            @foreach($rekap as $rekap)
                               <tr>
							   	<td>{{ \Carbon\Carbon::parse($rekap->tanggal)->format('d M Y') }}</td>
                                   <td style="text-align: justify; ">
										<b style="text-transform: uppercase;">{{ $rekap->materi }}</b><br>
										Catatan : <br>{{ $rekap->catatan }}
									</td>
                                   <td>{{$rekap->durasi}}</td>
                                   <td><i class='glyphicon glyphicon-ok'></i></td>
                               </tr>
                               @endforeach
                           </tbody>
                       </table>
                   </div>
                   
                   <div class="row">
                       <div class="receipt-header receipt-header-mid receipt-footer">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Dibuat Pada : </b>{{date("d M Y", strtotime ( date('Y-m-d H:i:s')))}}</p>
                               </div>
                           </div>
                           <div class="col-xs-4 col-sm-4 col-md-4">
                           </div>
                       </div>
                   </div>
                   
               </div>    
           </div>
       </div>
</body>
<script>
    window.print();
</script>
</html>
