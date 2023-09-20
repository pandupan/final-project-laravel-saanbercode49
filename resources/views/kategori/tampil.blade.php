<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="/kategori/create" class"btn btn-primary btn-sm my-3">Tambah</a>
<table class="table">
  <thead class="table-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($kategori as $key => $item)
    <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->nama}}</td>
        <td>
            <form action="/kategori/{{$item->id}}" method="POST">
                @csrf
                @method('delete')
                <a href="/kategori/{{$item->id}}" class="btn btn-sm btn-info">detail</a>
                <a href="/kategori/{{$item->id}}/edit" class="btn btn-sm btn-info">edit</a>
                <input type="submit" value="delete">
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td>Tidak ada Kategori</td>
    </tr>
    @endforelse
  </tbody>
</table>
</body>
</html>