<!-- <!DOCTYPE html>
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
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link bootstrap v4.4.1 --}}
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- css di file public --}}
    <link rel="stylesheet" href="{{asset('./style.css')}}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" 
    integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
</head>
<body>
  <div class="container">
    <div class="main-body p-0">
        <div class="inner-wrapper">
            <!-- Inner sidebar -->
            <div class="inner-sidebar">
                <!-- Inner sidebar header -->
                <div class="inner-sidebar-header justify-content-center">
                    <a href="/"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" width="50" alt="User" />
                         USER</a>
                </div>
                <!-- /Inner sidebar header -->
    
                <!-- Inner sidebar body -->
                <div class="inner-sidebar-body p-3 text-center">
                   <h3>tambahin</h3>
                   <a class="btn btn-sm btn-info" href="/kategori">Kembali</a>
                </div>
                <!-- /Inner sidebar body -->
            </div>
            <!-- /Inner sidebar -->
    
            <!-- Inner main -->
            <div class="inner-main">
                <div class="inner-main-header d-flex justify-content-center">
                    <h1>forum tanya jawab</h1>
                </div>       
                <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                        <div class="text-center mb-4">
                            <h3>apa yang mau ko tanyakan?</h3>
                        </div>
                        
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
                </div>
    
                <!-- /Inner main body -->
            </div>
            <!-- /Inner main -->
        </div>
    </div>
    </div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>