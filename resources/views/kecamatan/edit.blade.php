<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create Kecamatan Data</title>
  </head>
  <body>
    <div class="container" style="width: 50%">
        <form action="{{route('kecamatan.update', $kecamatan->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Kode Kecamatan</label>
                <input type="text" value="{{$kecamatan->kode_kecamatan}}" name="kode_kecamatan" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Kecamatan</label>
                <input type="text" value="{{$kecamatan->nama_kecamatan}}" name="nama_kecamatan" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-check">
                <input class="form-check-input" value="{{$kecamatan->active}}" type="checkbox" name="active" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Active
                </label>
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>