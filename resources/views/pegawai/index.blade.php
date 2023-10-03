<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kelurahan</title>
  </head>
  <body>
    <div class="container">
      {{-- {{dd($data_kelurahan)}} --}}
        <div class="mt-5">
            <a href="{{route('pegawai.create')}}" class="btn btn-primary mb-5">Tambah Data</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kelurahan</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data_pegawai as $item)    
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$item->nama_pegawai}}</td>
                    <td>{{$item->tempat_lahir}}</td>
                    <td>{{$item->tanggal_lahir}}</td>
                    <td>{{$item->jenis_kelamin}}</td>
                    <td>{{$item->agama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->nama_kelurahan}}</td>
                    <td>{{$item->nama_kecamatan}}</td>
                    <td>{{$item->nama_provinsi}}</td>
                    <td>
                    <form action="{{route('pegawai.destroy', $item->id)}}" method="post">
                        <a href="{{route('pegawai.edit', $item->id)}}" class="btn btn-primary">Edit Data</a>

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