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
     @stack('styles')
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
                    {{auth::user()->name}}</a>
             </div>
             <!-- /Inner sidebar header -->
 
             <!-- Inner sidebar body -->
             <div class="inner-sidebar-body p-3 text-center">
                 @if($kategori)
                 <div class="dropdown mb-3">
                     <button class="btn btn-sm btn-info w-100 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         action
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <a class="dropdown-item" href="/kategori/{{$kategori->id}}/edit">Edit</a>
                         <form action="/kategori/{{$kategori->id}}" method="POST">
                             @csrf
                             @method('delete')
                             <button type="submit" class="dropdown-item">Delete</button>
                         </form>
                     </div>
                 </div>
             @else
                 <p>Tidak ada Kategori</p>
             @endif
         
             <h5>Semua kategori :</h5>
             <ul class="list-group mb-4">
                 @foreach ($semuaKategori as $ini)
                     <a href="/kategori/{{$ini->id}}">
                         <li  class="list-group-item mb-1">{{$ini->nama}}</li> 
                    </a>
                 @endforeach
             </ul>
             <a href="/kategori" class="btn btn-sm btn-secondary">kembali</a>
             </div>
             <!-- /Inner sidebar body -->
         </div>
         <!-- /Inner sidebar -->
 
         <!-- Inner main -->
         <div class="inner-main">
             <!-- Inner main header -->
             <div class="inner-main-header d-flex justify-content-center">
                 <h1>forum tanya jawab</h1>
             </div>

             <!-- /Inner main header -->
 
             <!-- Inner main body -->         
             <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                     <div class="text-center mb-4">
                         <h3>menampilkan detail kategori {{$kategori->nama}}</h3>
                         <p>deskripsi : {{$kategori->deskripsi}}</p>
                     </div>
                     <div>
                         <a href="/pertanyaan/create" class="btn btn-primary mb-3">tambah diskusi baru</a>
                     </div>

                     <!-- isi pertanyaan -->
                     @forelse ($kategori->pertanyaan as $item)
                     <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="/pertanyaan/{{$item->id}}" class="text-body">{{$item->title}}</a></h6>
                                    <p class="text-secondary">
                                    {{ Str::limit($item->content, 50)}}
                                    </p>
                                    <p class="text-muted"> diposting oleh : <a href="/">{{auth::user()->name}}</a></p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="/pertanyaan/{{$item->id}}/edit" class="btn-sm btn-warning mr-2">Edit</a>
                                    <form action="/pertanyaan/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn-sm btn-danger">
                                    </form>
                                </div>
                            </div>
                        </div>
                       </div>
                     @empty
                         <h3>tidak ada pertanyaan di kategori ini</h3>
                     @endforelse
         </div>
     </div>
 
 </div>
 </div>
 <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript">
 </body>
 </html>