<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApotekKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <!-- end col -->
    <section id="layanan" style="margin-top: 30px">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="{{asset('assets/img/amann.png')}}" class="card-img-top" width="5" height="350" alt="">
                        <div class="card-body">
                          <h5 class="card-title text-center">Aman</h5>
                          <p class="card-text text-center">Karena ApotekKu mempunyai citra yang baik, dikenal oleh masyarakat, dan berkomitmen dalam menjaga keaslian obat yang dipasarkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="{{asset('assets/img/layananonline.png')}}" class="card-img-top" width="5" height="350" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center">Mudah Dijangkau</h5>
                          <p class="card-text text-center">Karena ditunjang oleh sistem yang mengakomodir segala kebutuhan kami sebagai franchisee untuk mengontrol meskipun tidak selalu standby di lokasi, juga dilengkapi Standar Operasional Prosedur (SOP) yang jelas, baik dari segi pelayanan, pengkajian produk, kebersihan gerai, dll.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="{{asset('assets/img/untung.png')}}" class="card-img-top" width="5" height="350" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center">Menguntungkan</h5>
                          <p class="card-text text-center">Karena obat sudah menjadi kebutuhan pokok manusia sehingga bisnis apotek tidak terlalu terpengaruh dengan perubahan ekonomi, unsur politik, dan inflasi. Bisnis ini sangat realistis tanpa janji-janji muluk akan balik modal dengan cepat.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        
    <!-- end col -->
    <div class="container-fluid" style="padding: 50px 70px; background-color: rgba(182, 161, 199, 0.986);">
      <div class="container" style="width:80%; background-color: #ffffff;">
      <div class="content">
        <div class="left-side">
          <div class="address deskripsis">
            <img src="{{asset('assets/img/house-solid.svg')}}" style="width: 20px; height: 30px;" alt=""> Address
            <div class="text-one">Jl. Mandala Raya No. 31A, Tomang, Grogol Petamburan, Jakarta Barat, DKI Jakarta 11440.</div>
          </div>
          <div class="phone deskripsis">
            <img src="{{asset('assets/img/phone-solid.svg')}}" style="width: 20px; height: 30px;" alt=""> Phone
            <div class="text-one">+0098 9893 7892</div>
            <div class="text-two">+0096 8392 9922</div>
          </div>
          <div class="email deskripsis">
            <img src="{{asset('assets/img/envelope-solid.svg')}}" style="width: 20px; height: 30px;" alt="">  Email
            <div class="text-one">Apotekku@gmail.ac.id</div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>