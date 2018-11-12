@extends('layouts.master')

@section('title')
  <title>Qur'anKu</title>
@endsection

@section('content')
  <div class="search-surat-container-show">
    <div class="search-box">
      <div class="logo-quran-box">
        <img class="logo-quran" src="{{ asset('/img/logo-white.png') }}" alt="">
      </div>
      <form action="/surat/cari" method="POST">
        {{ csrf_field() }}

        <input class="search-input" name="query" type="text" placeholder="Cari berdasarkan nama surah atau arti ayat...">
        <button type="submit" class="search-button">
          Cari
        </button>
      </form>
    </div>
  </div>
@endsection