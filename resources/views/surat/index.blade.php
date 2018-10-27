<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Surat</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animated.css">    
  </head>
  <body>
      <p>{{ $surat->nomor_surat }}</p>
      <p>{{ $surat->nama_surat }}</p>
      <p>{{ $surat->nama_surat_arab }}</p>
      <p>{{ $surat->arti_nama }}</p>
      <p>{{ $surat->jumlah_ayat }}</p>
      <p>{{ $surat->tempat_turun }}</p>
      <p>{{ $surat->urutan_pewahyuan }}</p>

      <ul>
        @foreach ($surat->ayats as $ayat)
          <li>
            <div>
            {{ $ayat->nomor_ayat }}
            {{ $ayat->teks_arab }}
            {{ $ayat->teks_latin }}
            {{ $ayat->terjemahan_idn }}
            {{ $ayat->terjemahan_eng }}
           </div>
          </li>
        @endforeach
      </ul>

  </body>
</html>