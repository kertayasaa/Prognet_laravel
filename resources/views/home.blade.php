<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>


<div class="container-fluid">
<div class="alert alert-primary" role="alert">
  Selamat Datang Di Halaman I Putu Kerta Yasa.
</div >
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/1.jpg" class="img-fluid" alt="Responsive image"alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Registrasi Mahasiswa Baru</h5>
        <a href="mahasiswa/create" class="btn btn-outline-primary shadow">Create</a>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/2.jpg" class="img-fluid" alt="Responsive image"alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lihat Data Prodi</h5>
        <a href="/prodi" class="btn btn-small btn-outline-success">View Prodi</a>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/4.jpg" class="img-fluid" alt="Responsive image"alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>View Data Mahasiswa</h5>
        <a href="/mahasiswa" class="btn btn-small btn-outline-success">View Data Mahasiswa</a>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>



    <div class="container m-5">
        <div class="row text-center">
            <div class="col-sm-12 col-md-6">
                <a href="/mahasiswa" class="btn btn-lg btn-primary">View Mahasiswa</a>
            </div>
            <div class="col-sm-12 col-md-6">
                 <a href="/prodi" class="btn btn-lg btn-primary">View Prodi</a>
            </div>
        </div>
       
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>