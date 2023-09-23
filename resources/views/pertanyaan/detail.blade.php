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
                     <h3>menampilkan detail pertanyaan </h3>
                 </div>
                 <div class="inner-main-body p-2 p-sm-3  ">
                    <a href="/pertanyaan" class="btn btn-light btn-sm mb-3 has-icon"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="media forum-item">
                                <a href="javascript:void(0)" class="card-link">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" width="50" alt="User" />
                                    <small class="d-block text-center text-muted">Newbie</small>
                                </a>
                                <div class="media-body ml-3">
                                    <a href="javascript:void(0)" class="text-secondary">{{auth::user()->name}}</a>
                                    <h5 class="mt-1">{{$pertanyaan->title}}</h5>
                                    <div class="mt-3 font-size-sm overflow-auto text-break">
                                        <p>{{$pertanyaan->content}}</p>
                                    </div>
                                </div>
                                <div class="text-muted small text-center">
                                    <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                    <span><i class="far fa-comment ml-2"></i> 3</span>
                                </div>
                            </div>
                            <hr> <h6>komentar :</h6>
                            @forelse ($pertanyaan->komentar as $item)
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="media forum-item">
                                        <a href="javascript:void(0)" class="card-link">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" width="50" alt="User" />
                                        </a>
                                        <div class=" ml-3">
                                            <h6>{{$item->user->name}} </h6>
                                            <p>{{$item->content}} </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h6>tidak ada komentar</h6>    
                            @endforelse
        
                            <form action="/komentar/{{$pertanyaan->id}}" method="post">
                                @csrf
                                <textarea name="content" class="form-control" cols="20" rows="5" placeholder="tambahkan komentar"></textarea>
                                @error('content')
                                    <div class="alert alert-danger">
                                        {{message}}    
                                    </div>   
                                @enderror
                                <input type="submit" class="btn btn-sm btn-info my-2" value="post komentar">
                            </form>
                            <hr> <a href="/pertanyaan" class="btn btn-sm btn-warning">kembali</a>
                        </div>
                    </div>
                    <!-- komentar didalam pertanyaan -->

                    
                    
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
 </body>
 </html>