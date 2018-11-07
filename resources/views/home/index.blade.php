@extends('layouts.master')

@section('title')
    <title>Qur'anKu - Aplikasi Alquran Digital</title>
@endsection

@section('content')
    <header>
        <div class="header-box">
            <div class="header-box__logo">
                <img src="img/logo.png" alt="" srcset="" class="logo">
            </div>

            <div class="header-box__button">
                <a href="/read" class="button button-animated button-animated-left header-button__read">
                    Baca Qur'an
                </a>
                <a href="/read/search" class="button button-animated button-animated-right header-button__read">
                    Cari Surat
                </a>
                
                {{-- @if ( ! Auth::check() ) --}}
                    <a href="/hafalan" class="button button-animated button-animated-left header-button__read">
                        Mode Hafalan
                    </a>
                {{-- @endif --}}
            </div>
        </div>
    </header>
@endsection