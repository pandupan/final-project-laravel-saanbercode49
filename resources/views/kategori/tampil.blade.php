

<!DOCTYPE html>
<html lang="en">
<head>
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
                <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" width="50" alt="User" />
                     USER</a>
            </div>
            
            <div class="inner-sidebar-body p-0">
              <nav class="nav nav-pills nav-gap-y-1 p-2 flex-column">
                <h3 class="text-center mb-3">Kategori</h3>
                @forelse ($kategori as $key => $item)
                <div class="dropdown mb-3">
                  <button class="btn btn-info w-100 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{$item->nama}}
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/kategori/{{$item->id}}">Detail</a>
                      <a class="dropdown-item" href="/kategori/{{$item->id}}/edit">Edit</a>
                      <form action="/kategori/{{$item->id}}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="dropdown-item">Delete</button>
                      </form>
                    </div>
                  </div>
                  @empty
                  <p>Tidak ada Kategori</p>
                  @endforelse
                  <a href="/kategori/create" class="btn btn-primary btn-sm my-3">Tambah kategori baru</a>
                </nav>
            </div>
        </div>

        <div class="inner-main">
            <div class="inner-main-header d-flex justify-content-center">
              <h1 class="text-center">forum tanya jawab</h1>
            </div>
            <div class="p-3">
              <div class="card width: 18rem">
                <h3 class="m-3">mulai buat pertanyaanmu <a href="">disini</a></h3>
                <img class="img-fluid w-50" src="https://img.freepik.com/free-vector/meeting-concept-illustration_114360-717.jpg?w=826&t=st=1695271132~exp=1695271732~hmac=622cbdf54a778541b19858d0ee405dcef2b51c7519a9fdc40e08f81176dd9f02" alt="">

              </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
</body>
</html>

