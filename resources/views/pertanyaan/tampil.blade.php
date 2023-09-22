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
                 <a href=""><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" width="50" alt="User" />
                      USER</a>
             </div>
             <!-- /Inner sidebar header -->
 
             <!-- Inner sidebar body -->
             <div class="inner-sidebar-body p-3 text-center">
                 <h5 class="mb-5">pertanyaan</h5>
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
                         <h3>menampilkan detail kategori :</h3>
                         <p>deskripsi : </p>
                     </div>

                     <!-- isi pertanyaan -->
                     @forelse ($pertanyaan as $item)
                 <div class="card mb-2">
                     <div class="card-body p-2 p-sm-3">
                         <div class="media forum-item">
                             <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                             <div class="media-body">
                                 <h6><a href="#" data-toggle="collapse" data-target=".forum-content"  data-pertanyaan-id="{{$item->id}}" class="text-body">{{$item->title}}</a></h6>
                                 <p class="text-secondary">
                                 {{ Str::limit($item->content, 50)}}
                                 </p>
                                 <p class="text-muted"><a href="javascript:void(0)">nama user</a> replied <span class="text-secondary font-weight-bold">13 minutes ago</span></p>
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
                        <h3> tidak ada berita </h3>
                    @endforelse
                 <a href="/pertanyaan/create" class="btn btn-primary">tambah diskusi baru</a>
             </div>
             
             <div class="inner-main-body p-2 p-sm-3 collapse forum-content">
                 <a href="#" class="btn btn-light btn-sm mb-3 has-icon" data-toggle="collapse" data-target=".forum-content"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                 <div class="card mb-2">
                     <div class="card-body">
                         <div class="media forum-item">
                             <a href="javascript:void(0)" class="card-link">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" width="50" alt="User" />
                                 <small class="d-block text-center text-muted">Newbie</small>
                             </a>
                             <div class="media-body ml-3">
                                 <a href="javascript:void(0)" class="text-secondary">user</a>
                                 <h5 class="mt-1">{{$item->title}}</h5>
                                 <div class="mt-3 font-size-sm overflow-auto text-break">
                                     <p>{{$item->content}}</p>
                                 </div>
                             </div>
                             <div class="text-muted small text-center">
                                 <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                 <span><i class="far fa-comment ml-2"></i> 3</span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- komentar didalam pertanyaan -->
                 <div class="card mb-2">
                     <div class="card-body">
                         <div class="media forum-item">
                             <a href="javascript:void(0)" class="card-link">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" width="50" alt="User" />
                                 <small class="d-block text-center text-muted">Pro</small>
                             </a>
                             <div class="media-body ml-3">
                                 <a href="javascript:void(0)" class="text-secondary">user</a>
                                 <div class="mt-3 font-size-sm">
                                     <p>komentar</p> </div>
                                 <button class="btn btn-xs text-muted has-icon"><i class="fa fa-heart" aria-hidden="true"></i>1</button>
                                 <a href="javascript:void(0)" class="text-muted small">Reply</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- /komentar didalam pertanyaan -->
            <!-- /isi pertanyaan -->
             </div>
         </div>
     </div>
 
 </div>
 </div>
 <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
</script>
 </body>
 </html>