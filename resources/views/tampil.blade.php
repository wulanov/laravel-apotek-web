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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="text-left">
            <h2><b>List Obat</b></h2>
        </div>
    </div>

    <!-- search -->
    <div class="container mt-2">
      <form action="/tampil" method="get" class="d-flex">
        <input class="form-control me-2" name="search" placeholder="Masukkan nama obat" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>    

    <!-- produk -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-2 mb-3">
            @foreach ($data as $dt)
            <div class="col">
                <div class="card h-100">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="{{asset('foto/'.$dt->foto)}}" class="card-img-top" style="width: 250px;">
                        <a href="/delete/{{$dt->id}}" style="position: absolute; top: 0; right: 0;">
                        <i class="fa fa-trash" width="100" height="100"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{ $dt->obat }} <a href="/tedit/{{ $dt->id }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                              </svg></a></h3>
                          <p class="card-text"><span style="font-weight: bold">Harga:</span> Rp. {{ number_format($dt->harga, 0, ',', '.') }}</p>
                        <div class="d-flex">
                            <a href="/deskripsi/{{$dt->id}}" class="btn btn-primary">More</a>
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