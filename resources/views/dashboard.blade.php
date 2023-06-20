<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
    <style>
        body{
            font-family: monospace;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#47597E;">
        <div class="container">
            <a href="" class="navbar-brand">MarketPlace</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="product">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="slider">Slider</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logo">Logo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="member">Member</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admin">Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout/admin">Keluar</a>
                  </li>
                </ul>
        </div>
    </nav>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
    </svg>
    @yield('dashboard')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
    </svg>
</body>
</html>