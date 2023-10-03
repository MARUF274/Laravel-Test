<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create Kelurahan Data</title>
  </head>
  <body>
    <div class="container" style="width: 50%">
        <form action="{{route('kelurahan.update', $kelurahan->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Kode Kelurahan</label>
                <input type="text" value="{{$kelurahan->kode_kelurahan}}" name="kode_kelurahan" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Kelurahan</label>
                <input type="text" value="{{$kelurahan->nama_kelurahan}}" name="nama_kelurahan" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-check">
                <input class="form-check-input" value="{{$kelurahan->active}}" type="checkbox" name="active" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Active
                </label>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Kecamatan</label>
              <select class="form-select form-select-lg" name="kode_kecamatan" id="">
                <option selected>Pilih kecamatan</option>
                @foreach($data_kecamatan as $item)
                <option value="{{$item->kode_kecamatan}}">{{$item->nama_kecamatan}}</option>
                @endforeach
              </select>
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>