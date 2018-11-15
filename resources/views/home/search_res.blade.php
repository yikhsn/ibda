@extends('layouts.master')

@section('description')
  <meta name="description" content="Hasil Pencarian Surat Al-Qur'an">    
@endsection

@section('title')
  <title>Hasil Pencarian Surat Al-Qur'an</title>
@endsection

@section('content')
    {{-- <div>
        <img src="img/thumbnail.png" class="bg2"/>
    </div> --}}

    <div class="search-surat-container-result">
      <div class="search-box">
        <form action="/surat/cari" method="POST">
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
          <h1>Hasil Pencarian Surat Al-Qur'an</h1>
      </div>
      
      <ul class="row no-gutters surats">
        @foreach ($surats as $surat)
        <a href="/surat/{{ $surat->nomor_surat }}" class="col-md-6 col-12 surat-single-box">
          <li class="row surat-single">
            <div class="col-1 nomor-surat">
              {{ $surat->nomor_surat }}
            </div>
            <div class="col-5">
              <h2 class="nama-surat">{{ $surat->nama_surat }}</h2>
              <h3 class="arti-nama-surat">{{ $surat->arti_nama }}</h3>
            </div>
            <div class="col-5">
              <div class="nama-surat-arab">{{ $surat->nama_surat_arab }}</div>
            </div>
          </li>
        </a>
        @endforeach
      </ul>

    </div>
@endsection