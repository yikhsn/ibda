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
  
  {{-- keterangan ayat --}}
  <p>{{ $ayat->id }}</p>
  <p>{{ $ayat->nomor_surat }}</p>
  <p>{{ $ayat->nomor_ayat }}</p>
  <p>{{ $ayat->juz }}</p>
  <p>{{ $ayat->text_arab }}</p>
  <p>{{ $ayat->text_latin }}</p>
  <p>{{ $ayat->terjemahan_idn }}</p>
  <p>{{ $ayat->terjemahan_eng }}</p>

  
  {{-- keterangan surat dari ayat --}}
  <p>{{ $ayat->surat->nomor_surat }}</p>
  <p>{{ $ayat->surat->nama_surat }}</p>
  <p>{{ $ayat->surat->nama_surat_arab }}</p>
  <p>{{ $ayat->surat->arti_nama }}</p>
  <p>{{ $ayat->surat->jumlah_ayat }}</p>
  <p>{{ $ayat->surat->tempat_turun }}</p>
  <p>{{ $ayat->surat->urutan_pewahyuan }}</p>
</body>
</html>