<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plasma Antrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      body{
        background-image: url('/img/working-bg.jpg');
        margin: 0;
        padding: 0;
     height: 100%;
      }
    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
          <a class="navbar-brand text-success bg-white p-2 rounded-3" href="#">
            <img src="/img/logo.png" alt="Logo" width="90" height="30" class="d-inline-block align-text-top">
            PLN Purwokerto
          </a>

          <div class="d-flex">
            <h6 class="text-white">{{ 'Purwokerto, ' . date('d-M-Y') }}</h6>
          </div>
        </div>
    </nav>

    <div class="container-fluid px-3 mt-1 position-relative" style="min-height:91vh !important;padding-bottom:100px;">
      <div class="row">
              <div class="col-md-4">      
              <div class="row p-2">
                  <div class="col-sm">
                      <div class="card text-center">
                        @if (!$loket1->count())
                          <h5>Belum Ada Antrian</h5>
                        @else
                          <h5 class="card-header bg-success text-white">ANTRIAN {{ strtoupper($loket1[0]->loket->deskripsi)  }}</h5>
                          <div class="card-body">
                            <h5 class="card-title">Nomor Antrian</h5>
                            <h1 class="card-text" style="font-size: 100px; margin: 0;">
                              {{ $loket1[0]->no_antrian }}
                            </h1>
                          </div>
                          <h5 class="card-header bg-success text-white">LOKET {{ $loket1[0]->loket->id }}</h5>
                        @endif
                      </div>
                  </div>
              </div>
              
              <div class="row p-2">
                <div class="col-sm">
                    <div class="card text-center">
                      @if (!$loket2->count())
                        <h5>Belum Ada Antrian</h5>
                      @else
                      <h5 class="card-header bg-success text-white">ANTRIAN {{ strtoupper($loket2[0]->loket->deskripsi) }}</h5>
                      <div class="card-body">
                        <h5 class="card-title">Nomor Antrian</h5>
                        <h1 class="card-text" style="font-size: 100px; margin: 0;">
                          {{ $loket2[0]->no_antrian }}
                        </h1>
                      </div>
                      <h5 class="card-header bg-success text-white">LOKET {{ $loket2[0]->loket->id }}</h5>
                      @endif
                    </div>
                </div>
            </div>
                
            </div>
            <div class="col-md-8" >
                <div class="row">
                  <div class="card mt-2 border-0" style="background-color: rgba(0, 0, 0, 0)">
                    <div class="card-body">
                      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                      <div class="ads-display">
                <iframe width="960" height="450" src="https://www.youtube.com/embed/t6VcWRikO5w?si=Rh7OIvf0ajH0menI?rel=0&showinfo=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

                    </div>
                  </div>
                </div>
                
            </div>
        </div>

        <div class="footer position-absolute mx-0 start-0 end-0 bottom-0 border-top border-4 border-success">
          <div class="card bg-dark rounded-0">
              <div class="card-body">
                <marquee behavior="" direction="" class="text-white">
                  <img src="/img/logo.png" width="90" height="30" alt=""> Selamat Datang di Sistem Informasi Antrian PLN Purwokerto, Untuk Informasi Lebih lanjut Hubungi, CS: 087XXXXXXX</marquee>
              </div>
          </div>
      </div>
      </div>
      
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>