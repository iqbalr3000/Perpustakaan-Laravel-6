<!DOCTYPE html>
<html>
<head>
<title>Dashboard - Uhuyy.com</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
 
</head>
<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Selamat Datang</h3>
              <div class="card">
                  <div class="card-body">
                    Hallo {{ ucfirst(Auth()->user()->name) }}
                  </div>


                  <div>
                    <a class="nav-item nav-link" href="http://localhost/Perpus/public/books">Input Buku</a>
                    <a class="nav-item nav-link" href="http://localhost/Perpus/public/penerbits">Input Penerbit</a>
                    <a class="nav-item nav-link" href="http://localhost/Perpus/public/siswas">Input Siswa</a>
                    <a class="nav-item nav-link" href="http://localhost/Perpus/public/rayons">Input Rayon</a>
                  </div>


                  <div class="card-body">
                    <a class="small" href="{{url('logout')}}">Keluar</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</body>
</html>