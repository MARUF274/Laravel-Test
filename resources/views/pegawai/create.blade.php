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
    {{-- {{dd($data_kecamatan)}} --}}
    <div class="container" style="width: 50%">
        <form action="{{route('pegawai.store')}}" method="post">
            @csrf
            
            <div class="mb-3">
                <label for="" class="form-label">Nama Pegawai</label>
                <input type="text" name="nama_pegawai" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" id="" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Agama</label>
            <input type="text" name="agama" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Jenis Kelamin</label>
          <input type="text" name="jenis_kelamin" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Alamat</label>
        <input type="text" name="alamat" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
            <div class="mb-3">
              <label for="" class="form-label">Kecamatan</label>
              <select class="form-select form-select-lg" name="kode_kelurahan" id="">
                <option selected>Pilih kelurahan</option>
                @foreach($data_kelurahan as $item)
                <option value="{{$item->kode_kelurahan}}">{{$item->nama_kelurahan}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Kecamatan</label>
              <select class="form-select form-select-lg" name="kode_kecamatan" id="">
                <option selected>Pilih Kecamatan</option>
                @foreach($data_kecamatan as $item)
                <option value="{{$item->kode_kecamatan}}">{{$item->nama_kecamatan}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Provinsi</label>
              <select class="form-select form-select-lg" name="kode_provinsi" id="">
                <option selected>Pilih Provinsi</option>
                @foreach($data_provinsi as $item)
                <option value="{{$item->kode_provinsi}}">{{$item->nama_provinsi}}</option>
                @endforeach
              </select>
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>