<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kecamatan</title>
  </head>
  <body>
    <div class="container">
        <div class="mt-5">
            <a href="{{route('kecamatan.create')}}" class="btn btn-primary mb-5">Tambah Data</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Kecamatan</th>
                <th scope="col">Nama Kecamatan</th>
                <th scope="col">Active</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data_kecamatan as $item)    
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$item->kode_kecamatan}}</td>
                    <td>{{$item->nama_kecamatan}}</td>
                    <td>{{$item->active}}</td>
                    <td>
                    <form action="{{route('kecamatan.destroy', $item->id)}}" method="post">
                        <a href="{{route('kecamatan.edit', $item->id)}}" class="btn btn-primary">Edit Data</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>