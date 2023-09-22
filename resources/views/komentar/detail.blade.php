<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pertanyaan</title>
</head>
<body>
    <a href="/komentar">kembali</a>
    <img src="{{asset('/image/'. $komentar->gambar)}}" class="img-fuild">
    <h1>{{ Str::limit($komentar->content, 50)}}</h1>
    <p>{{$komentar->content}}</p>
</body>
</html>