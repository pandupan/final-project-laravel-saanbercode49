<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Komentar</title>
</head>
<body>
<form action="/komentar/{{$komentar->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
    <label>Komentar</label>
    <select class="form-control" name="pertanyaan_id">
        <option value="">--Pilih pertanyaan--</option>
        @forelse ($pertanyaan as $item)
            if ($item->id === $komentar->pertanyaan_id)
                <option value="{{$item->id}}" selected>{{ Str::limit($item->content, 50)}}</option>
            else
                <option value="{{$item->id}}">{{ Str::limit($item->content, 50)}}</option>
        @empty
            <option value="">Tidak ada komentar</option>
        @endforelse
    </select>

  </div>
    <div class="form-group">
  </div>
  <div class="mb-3">
  <div class="mb-3">
    <label>Pertanyaan</label>
    <textarea type="text" name="content"  class="@error('content') is-invalid @enderror form-control" rows="4" cols="50" placeholder="Masukan Pertanyaan">{{$komentar->content}}</textarea>
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