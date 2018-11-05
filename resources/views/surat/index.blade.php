@extends('layouts.master')

@section('title')
  <title></title>
@endsection

@section('content')
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/"><i class="fa fa-home"></i></a>
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

        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bahasa</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Indonesia</a>
            <a class="dropdown-item" href="#">Inggris</a>
          </div>
        </li>-->

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


    <div class="keterangan-surat-container">
      <div class="keterangan-surat">
          <div class="keterangan-surat-nama-arab"> {{ $surat->nama_surat_arab }} </div>

          <div class="keterangan-surat-nama-indo">{{ $surat->nama_surat }}</div>
          <div class="keterangan-surat-arti-nama">{{ $surat->arti_nama }}</div>        
      </div>
    </div>

    <div class="row no-gutters body-ayats-container">
      <div class="body-ayats">
        @foreach ($surat->ayats as $ayat)
            
        <div class="single-ayat">
          <div class="single-ayat-kiri">
            <div class="ayat-nomor-surat">
                {{ $ayat->nomor_ayat }}
            </div>
            <div class="ayat-putar-suara">
              <button class="ayat-suara-button"></button>
            </div>
            <div class="ayat-share">
              <div class="ayat-share-twitter">
                  <img src="{{  URL::asset('img/twitter.svg') }}" alt="">
              </div>
              <div class="ayat-share-facebook">
                  <img src="{{  URL::asset('img/facebook.svg') }}" alt="">

              </div>
            </div>
          </div>
          <div class="single-ayat-kanan">
            <div class="ayat-teks-arab">
                {{ $ayat->teks_arab }}
            </div>
            <div class="ayat-terjemahan">
              {{ $ayat->terjemahan_idn }}
            </div>
          </div>
        </div>

        @endforeach

        <button type="button" class="btn btn-outline-light" margin="20"><i class="fa fa-arrow-left"></i> Surah Sebelumnya</button>
        <button type="button" class="btn btn-outline-light">Surah Berikutnya <i class="fa fa-arrow-right"></i></button>

      </div>
    </div>

  <script>
    var musik = new Audio();
      
    musik.src = "{{ URL::asset('mp3/1.mp3') }}";
    musik.loop = true;
    // musik.play(); 
    
    function mulaiAudio(){
      var play = document.querySelector(".ayat-suara-button");

      play.addEventListener('click', fplay);

      function fplay() {
        if(musik.paused){
          musik.play();
          play.style.background = "url('../img/pause.svg')";
        }
        else {
          musik.pause();
          play.style.background = "url('../img/play.svg')";
        }
      }
    }

    window.addEventListener('load', mulaiAudio);
  </script>
@endsection