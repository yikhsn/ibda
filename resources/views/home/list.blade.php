
  {{-- <form action="/read/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
      <input type="text" class="form-control" name="query" placeholder="Search users">
      <span class="input-group-button">
          <button type="submit" class="btn btn-default">
            Cari
          </button>
      </span>
    </div>
  </form>

  <ul>
    @foreach ($surats as $surat)
    <li>
      <div>
        {{ $surat->nomor_surat }}
        {{ $surat->nama_surat }}
        {{ $surat->nama_surat_arab }}
        {{ $surat->arti_nama }}
        {{ $surat->jumlah_ayat }}
        {{ $surat->tempat_turun }}
        {{ $surat->urutan_pewahyuan }}

      </div>
    </li>
    @endforeach
  </ul>

  <ul>
      @foreach ($juzs as $juz)
      <li>
        <div>
          {{ $juz->nomor_juz }}
          {{ $juz->nama_juz }}
        </div>
      </li>
      @endforeach
    </ul> --}}

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
            <input class="search-input" type="search" placeholder="Cari berdasarkan nama surah atau arti ayat...">
            <input class="search-button" type="button" value="Cari">
          </form>
        </div>
      </div>

    <div class="content-surat">
      <div class="navbar-surat">
          <a href="/">JUZ</a>
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