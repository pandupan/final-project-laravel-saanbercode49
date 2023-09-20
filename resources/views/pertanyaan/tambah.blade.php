<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pertanyaan</title>
</head>
<body>
<form action="/pertanyaan" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
    <label>Kategori</label>
    <select class="form-control" name="kategori_id">
        <option value="">--Pilih Kategori--</option>
        @forelse ($kategori as $item)
            <option value="{{$item->id}}">{{$item->nama}}</option>
        @empty
            <option value="">Tidak ada Kategori</option>
        @endforelse
    </select>

  </div>
  @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Judul Pertanyaan</label>
    <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" placeholder="Masukan Judul Pertanyaan">
  </div>
  @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="mb-3">
    <label>Pertanyaan</label>
    <textarea type="text" name="content" class="@error('content') is-invalid @enderror form-control" rows="4" cols="50" placeholder="Masukan Pertanyaan"></textarea>
  </div>
  @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="mb-3">
    <label>Gambar</label>
   <input type="file" class="form-control" name="gambar">
  </div>
  @error('gambar')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>