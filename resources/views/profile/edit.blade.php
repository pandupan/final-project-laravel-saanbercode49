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
                 <h5 class="mb-5">edit profile</h5>
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
              <h2 class="text-center">edit data user</h2>
              <form method="POST" action="{{ route('profile.update', ['id' => $profile->id]) }}">
                @csrf
                @method('put')
              <div class="mb-3">
                <label>umur</label>
                <input type="number" value="{{$profile->umur}}" class="@error('umur') is-invalid @enderror form-control" placeholder="Masukan umur">
              </div>
              @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="mb-3">
                <label>alamat</label>
                <input type="text" value="{{$profile->alamat}}" class="@error('alamat') is-invalid @enderror form-control" placeholder="Masukan alamat">
              </div>
              @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="mb-3">
                <label>biodata</label>
                <input type="text" value="{{$profile->biodata}}" class="@error('biodata') is-invalid @enderror form-control" placeholder="Masukan biodata">
              </div>
              @error('biodata')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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