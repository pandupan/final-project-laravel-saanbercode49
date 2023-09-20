<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pertanyaan</title>
</head>
<body>
    <a href="/pertanyaan">kembali</a>
    <img src="{{asset('/image/'. $pertanyaan->gambar)}}" class="img-fuild">
    <h1>{{$pertanyaan->title}}</h1>
</body>
</html>