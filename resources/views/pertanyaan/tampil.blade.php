<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pertanyaan</title>
</head>
<body>
    <div class="row">
        @forelse ($pertanyaan as $item)
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('/image/' . $item->gambar)}}" alt="Card image cap">
          <div class="card-body">
            <h5>{{$item->title}}</h5>
            <p class="card-text">{{ Str::limit($item->content, 50)}}</p>
            <a href="/pertanyaan/{{$item->id}}" class="btn btn-primary">Komentar</a>
            <div class="row">
                <div class="col">
                    <a href="/pertanyaan/{{$item->id}}/edit" class="btn btn-primary">Edit pertanyaan</a>
                </div>
                <div class="col"></div>
                <form action="/pertanyaan/{{$item->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">

                </form>
            </div>
          </div>
        </div>
        @empty
            <h3> tidak ada berita </h3>
        @endforelse
    </div>
</body>
</html>