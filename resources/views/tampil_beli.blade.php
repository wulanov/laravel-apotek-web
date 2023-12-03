<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ApotekKu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
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

    <!-- home -->
    <div class="container-fluid" style="padding: 50px 70px; background-color: rgba(182, 161, 199, 0.986);">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="display-4">Selamat Datang di ApotekKu</h1>
                <p class="lead">Dimana tubuh yang fit adalah jantung kehidupan kami</p>
              </div>
        </div>
    </div>

    <!-- list -->
    <div class="container mt-2">
        <div class="text-center">
            <h2>List Product</h2>
        </div>
    </div>
    <!-- produk -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-2 mb-3">
            @foreach ($data as $dt)
            <div class="col">
                <div class="card h-100">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="{{asset('foto/'.$dt->foto)}}" class="card-img-top" style="width: 250px;">
                    </div>
                    <div class="card-body">
                          <h5 class="text-justify"><span style="font-weight: bold"></span> {{$dt->obat}}</h5>
                          <p class="card-text"><span style="font-weight: bold">Harga:</span> Rp. {{ number_format($dt->harga, 0, ',', '.') }}</p>
                        <div class="d-flex">
                          <a href="/beli/{{$dt->id}}" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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