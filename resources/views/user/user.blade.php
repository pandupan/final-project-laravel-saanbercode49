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
                 <h5 class="mb-5">hallo {{auth::user()->name}}</h5>
                 <a href="/kategori" class="btn btn-info">Mulai</a>
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
                 <h2 class="text-center">data user</h2>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title text-center">{{auth::user()->name}}</h5>
                              <p class="card-text text-center"> </p>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"> </li>
                              <li class="list-group-item"> </li>
                              <li class="list-group-item"> </li>
                            </ul>
                            <div class="card-body d-flex justify-content-between">
                                <a href="" class="btn-sm btn-warning w-50 mr-1">Edit</a>
                                <form action="" method="POST" class="w-50 ml-1">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn-sm btn-danger w-100">
                            </form>
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