@extends('layouts.master')

@section('description')
  <meta name="description" content="Cari Semua Surat Al-Qur'an Lengkap 30 Juz">
@endsection

@section('title')
  <title>Cari Semua Surat Al-Qur'an Lengkap 30 Juz</title>
@endsection

@section('content')
  <div class="search-surat-container-show">
    <div class="search-box">
      <div class="logo-quran-box">
        <h1>
          <img class="logo-quran" src="{{ asset('assets/img/logo-white.png') }}" alt="Cari Semua Surat Al-Qur'an Lengkap 30 Juz">
        </h1>
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