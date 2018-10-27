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
    </ul>
  
</body>
</html>