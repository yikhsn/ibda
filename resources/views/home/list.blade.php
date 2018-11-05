<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animated.css">
  </head>
  <body>

    {{-- <div>
        <img src="img/thumbnail.png" class="bg2"/>
    </div> --}}

    <div class="search-surat-container">
      <div class="search-box">
        <div class="logo-quran-box">
          <img class="logo-quran" src="{{ asset('/img/logo-white.png') }}" alt="">
        </div>
        <form action="/read/search" method="POST">
          {{ csrf_field() }}

          <input class="search-input" name="query" type="text" placeholder="Cari berdasarkan nama surah atau arti ayat...">
          <button type="submit" class="search-button">
            Cari
          </button>
        </form>
      </div>
    </div>

    <div class="content-surat">
      <div class="navbar-surat">
          <a href="/">SURAH</a>
      </div>
      
      <div class="row no-gutters surats">
        @foreach ($surats as $surat)
        <a href="/surat/{{ $surat->nomor_surat }}" class="col-md-6 col-12 surat-single-box">
          <div class="row surat-single">
            <div class="col-1 nomor-surat">
              {{ $surat->nomor_surat }}
            </div>
            <div class="col-5">
              <div class="nama-surat">{{ $surat->nama_surat }}</div>
              <div class="arti-nama-surat">{{ $surat->arti_nama }}</div>
            </div>
            <div class="col-5">
              <div class="nama-surat-arab">{{ $surat->nama_surat_arab }}</div>
            </div>
          </div>
        </a>
        @endforeach
      </div>

    </div>

  </body>
</html>