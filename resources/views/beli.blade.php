<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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

    <div class="container">
            <div class="row p-2">
                    <div class="card m-lg-4">
                        <div class="card-body">
                            <h5 class="my-auto">Lengkapi data</h5>
                            <hr>
                            <form method="POST" action="/cart/{{$data->id}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name">Nama Pembeli</label>
                                    <input id="name" class="form-control" type="text" name="nama_pembeli">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Alamat Tujuan</label>
                                    <input id="name" class="form-control" type="text" name="alamat">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">No. Telp</label>
                                    <input id="name" class="form-control" type="text" name="noHP">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Jumlah Barang</label>
                                    <input id="name" class="form-control" type="text" name="jumlah">
                                </div>
                                <hr>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success">Beli</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="sticky-footer bg-dark text-light text-center fixed-bottom">
      <div class="container">
        <strong>Copyright &copy; 2012-2020 <a href="#">ApotekKu.ac.id</a></strong>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>