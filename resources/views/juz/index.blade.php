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
  <p>{{ $juz->nomor_juz }}</p>

  <ul>
    @foreach ($juz->ayats as $ayat)
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

</html>