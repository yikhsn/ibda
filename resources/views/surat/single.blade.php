<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/.css') }}" rel="stylesheet" type="text/css">


</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark nav-line">
	<a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Surah lain</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Al-Fatihah</a>
					<a class="dropdown-item" href="#">Al-Baqarah</a>
					<a class="dropdown-item" href="#">Al-Maidah</a>
					<a class="dropdown-item" href="#">DST......</a>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menuju ayat ke</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">1</a>
					<a class="dropdown-item" href="#">2</a>
					<a class="dropdown-item" href="#">3</a>
					<a class="dropdown-item" href="#">DST......</a>
				</div>
			</li>

			<li>
				<a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book-open" ></i> Read Mode</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="cari surah, ayat, arti..." aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">cari</button>
		</form>
	</div>
	</nav>

	<img class="img-margin" src="img/fatiha1.png" width="100" height="50" align="center">
	<h2><font color="white">Al-Fatihah</font></h2>
	<font color="#cdcdcd">Pembukaan</font>
	<div align="center">
		<table class="tbfont" border="0">
		    <tr>
		        <td width="100" height="100" align="center" rowspan="3" class="ctrl">
		        	<font size="2pt">1:1</font><br><br>
		        	<img src="img/play.png" width="30" height="30"><br><br>
		        	<img src="img/tweet.png" width="25" height="25">
		        	<img src="img/fb.png" width="25" height="25">
		        </td>
		        <td>
		          <img src="img/bismillah.png" width="250" height="40" align="right"/><br>
		        </td>
		    </tr>
		    <tr>
		        <td>
		          <i>Bismillahirrahmanirrahim</i>
		        </td>
		    </tr>
		    <tr>
		        <td>
		          <font color="#cdcdcd">Dengan menyebut nama Allah yang maha pengasih lagi maha penyayang</font>
		        </td>
		    </tr>
		</table>

		<hr color="#cdcdcd" width="1060">

		<table class="tbfont" border="0">
		    <tr>
		        <td align="center" rowspan="3" class="ctrl">
		        	<font size="2pt">1:7</font><br><br>
		        	<img src="img/play.png" width="30" height="30"><br><br>
		        	<img src="img/tweet.png" width="25" height="25">
		        	<img src="img/fb.png" width="25" height="25">
		        </td>
		        <td>
		          <img src="img/7.png" width="450" height="80" align="right"/><br>
		        </td>
		    </tr>
		    <tr>
		        <td>
		          <i>shiraatha alladziina an'amta 'alayhim ghayri almaghdhuubi 'alayhim walaa aldhdhaalliina.</i>
		        </td>
		    </tr>
		    <tr>
		        <td>
		          <font color="#cdcdcd">(yaitu) Jalan orang-orang yang telah Engkau beri nikmat kepada mereka; bukan (jalan) mereka yang dimurkai dan bukan (pula jalan) mereka yang sesat. </font>
		        </td>
		    </tr>
		</table>
		<hr color="#cdcdcd" width="1060">
	</div>

	<button type="button" class="btn btn-outline-light" margin="20"><i class="fa fa-arrow-left"></i> Surah Sebelumnya</button>
	<button type="button" class="btn btn-outline-light">Surah Berikutnya <i class="fa fa-arrow-right"></i></button>
  
  {{-- keterangan ayat --}}
  {{-- <p>{{ $ayat->id }}</p>
  <p>{{ $ayat->nomor_surat }}</p>
  <p>{{ $ayat->nomor_ayat }}</p>
  <p>{{ $ayat->juz }}</p>
  <p>{{ $ayat->text_arab }}</p>
  <p>{{ $ayat->text_latin }}</p>
  <p>{{ $ayat->terjemahan_idn }}</p>
  <p>{{ $ayat->terjemahan_eng }}</p> --}}

  <div class="body-ayats">
  
  {{-- keterangan surat dari ayat --}}
  <p>{{ $ayat->surat->nomor_surat }}</p>
  <p>{{ $ayat->surat->nama_surat }}</p>
  <p>{{ $ayat->surat->nama_surat_arab }}</p>
  <p>{{ $ayat->surat->arti_nama }}</p>
  <p>{{ $ayat->surat->jumlah_ayat }}</p>
  <p>{{ $ayat->surat->tempat_turun }}</p>
  <p>{{ $ayat->surat->urutan_pewahyuan }}</p>

    
  </div>  

</body>
</html>