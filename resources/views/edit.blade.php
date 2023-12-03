<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(61, 6, 105);">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="{{asset('assets/img/logo.png')}}" alt="" width="30" height="30" class="d-inline-block align-text-top">ApotekKu
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Obat
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/add">Input Obat</a></li>
                  <li><a class="dropdown-item" href="/tampil">Tampil Obat</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Transaksi
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/tampilt">Pembelian</a></li>
                  <li><a class="dropdown-item" href="/riwayat">Tampil Pembelian</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>


    <!-- card -->
    <div class="card m-lg-4">
        <div class="card-header text-center">
            Tambah Data Obat
        </div>
        <div class="card-body">
            <!-- body -->
            <form action="/edit/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- form text field -->
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="obar" name="obat" value="{{ $data->obat}}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $data->harga}}" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3">{{ $data->desc}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Dosis</label>
                    <input type="text" class="form-control" id="dosis" name="dosis" value="{{ $data->dosis}}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="foto" name="foto" aria-describedby="emailHelp">
                </div>
                <!-- end form text field -->

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- footer -->
    <footer class="sticky-footer bg-dark text-light text-center fixed-bottom">
      <div class="container">
        <strong>Copyright &copy; 2012-2020 <a href="#">ApotekKu.ac.id</a></strong>
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>