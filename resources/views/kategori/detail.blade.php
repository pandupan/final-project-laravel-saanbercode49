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
                <h3>detail</h3>
                <a class="btn btn-sm btn-info" href="/kategori">Kembali</a>
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
                         <h3>menampilakn detail kategori {{$kategori->nama}}</h3>
                         <p>deskripsi : {{$kategori->deskripsi}}</p>
                     </div>
                 <div class="card mb-2">
                     <div class="card-body p-2 p-sm-3">
                         <div class="media forum-item">
                             <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                             <div class="media-body">
                                 <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Realtime fetching data</a></h6>
                                 <p class="text-secondary">
                                     lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                 </p>
                                 <p class="text-muted"><a href="javascript:void(0)">drewdan</a> replied <span class="text-secondary font-weight-bold">13 minutes ago</span></p>
                             </div>
                             <div class="text-muted small text-center align-self-center">
                                 <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                 <span><i class="far fa-comment ml-2"></i> 3</span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <button>tambah diskusi</button>
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
                                 <a href="javascript:void(0)" class="text-secondary">Mokrani</a>
                                 <small class="text-muted ml-2">1 hour ago</small>
                                 <h5 class="mt-1">Realtime fetching data</h5>
                                 <div class="mt-3 font-size-sm">
                                     <p>Hellooo :)</p>
                                     <p>
                                         I'm newbie with laravel and i want to fetch data from database in realtime for my dashboard anaytics and i found a solution with ajax but it dosen't work if any one have a simple solution it will be
                                         helpful
                                     </p>
                                     <p>Thank</p>
                                 </div>
                             </div>
                             <div class="text-muted small text-center">
                                 <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                 <span><i class="far fa-comment ml-2"></i> 3</span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="card mb-2">
                     <div class="card-body">
                         <div class="media forum-item">
                             <a href="javascript:void(0)" class="card-link">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" width="50" alt="User" />
                                 <small class="d-block text-center text-muted">Pro</small>
                             </a>
                             <div class="media-body ml-3">
                                 <a href="javascript:void(0)" class="text-secondary">drewdan</a>
                                 <small class="text-muted ml-2">1 hour ago</small>
                                 <div class="mt-3 font-size-sm">
                                     <p>What exactly doesn't work with your ajax calls?</p>
                                     <p>Also, WebSockets are a great solution for realtime data on a dashboard. Laravel offers this out of the box using broadcasting</p>
                                 </div>
                                 <button class="btn btn-xs text-muted has-icon"><i class="fa fa-heart" aria-hidden="true"></i>1</button>
                                 <a href="javascript:void(0)" class="text-muted small">Reply</a>
                             </div>
                         </div>
                     </div>
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