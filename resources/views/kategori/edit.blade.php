<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/kategori/{{$kategori->id}}" method="POST">
    @csrf
    @method('put')
  <div class="mb-3">
    <label>Nama Kategori</label>
    <input type="text" name="nama" value="{{$kategori->nama}}" class="@error('nama') is-invalid @enderror form-control" placeholder="Masukan Nama Kategori">
  </div>
  @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="mb-3">
    <label>Deskripsi Kategori</label>
    <textarea type="text" name="deskripsi" class="@error('deskripsi') is-invalid @enderror form-control" rows="4" cols="50" placeholder="Masukan Deskripsi Kategori">{{$kategori->deskripsi}}</textarea>
  </div>
  @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>