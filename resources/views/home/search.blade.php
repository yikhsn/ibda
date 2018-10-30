<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animated.css">
</head>
<body>

  <form action="/read/search" method="POST" role="search">
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
    @foreach ($ayats as $ayat)
      <a href="/surat/{{ $ayat->nomor_surat }}/ayat/{{ $ayat->nomor_ayat }}">
        <li>
          {{ $ayat->id }}
          {{ $ayat->nomor_surat }}
          {{ $ayat->nomor_ayat }}
          {{ $ayat->juz }}
          {{ $ayat->text_arab }}
          {{ $ayat->text_latin }}
          {{ $ayat->terjemahan_idn }}
          {{ $ayat->terjemahan_eng }}   
        </li>
      </a>
      @endforeach
  </ul>

</body>
</html>