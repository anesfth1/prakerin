<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tracking Covid-19 - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/assets/img/corona.png')}}" rel="icon">
  <link href="{{asset('assets/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets//vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://fontawesome.com/icons?d=gallery&q=covid-19&m=free">
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v3.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php
        $datapositif = file_get_contents("https://api.kawalcorona.com/positif");
        $positif = json_decode($datapositif, TRUE);
        $datasembuh = file_get_contents("https://api.kawalcorona.com/sembuh");
        $sembuh = json_decode($datasembuh, TRUE);
        $datameninggal = file_get_contents("https://api.kawalcorona.com/meninggal");
        $meninggal = json_decode($datameninggal, TRUE);
        $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
        $id = json_decode($dataid, TRUE);
        $dataidprovinsi = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
        $idprovinsi = json_decode($dataidprovinsi, TRUE);
        $datadunia= file_get_contents("https://api.kawalcorona.com/");
        $dunia = json_decode($datadunia, TRUE);
    ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto" href="">Tra<a href="">Vid-19</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#departments">Global</a></li>
          <li><a href="#doctors">Indonesia</a></li>
          <li><a href="#services">Artikel</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="normal">Selamat Datang di TraVid-19 </h1>
      <h2 class="">Informasi data terbaru mengenai kasus Virus Corona di seluruh dunia. </h2>
    </div>
  </div>
  </section><!-- End Hero -->
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <p>INDONESIA</p>
              <div class="text-center">
              <img src="{{asset('assets/assets/img/tracking/indonesia.png')}}" width="50" height="50" alt="Positif">
              <h4><b><span data-toggle="counter-up">91023</span></b> POSITIF<br>
              <b><span data-toggle="counter-up">21983</span></b> SEMBUH <b>
              <span data-toggle="counter-up">1932</span></b> MENINGGAL</h4>
              <p><b>ORANG</b></p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <img src="{{asset('assets/assets/img/tracking/sad.png')}}" width="50" height="50" alt="Positif">
                    <p>TOTAL POSITIF</p>
                    <h1><span data-toggle="counter-up"><b><?php echo $positif['value'] ?></b></span></h1>
                    <p>ORANG</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <img src="{{asset('assets/assets/img/tracking/happy.png')}}" width="50" height="50" alt="Sembuh">
                    <p>TOTAL SEMBUH</p>
                    <h1><span data-toggle="counter-up"><b><?php echo $sembuh['value'] ?></b></span></h1>
                    <p>ORANG</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                  <img src="{{asset('assets/assets/img/tracking/cry.png')}}" width="50" height="50" alt="Meninggal">
                    <p>TOTAL MENINGGAL</p>
                    <h1><span data-toggle="counter-up"><b><?php echo $meninggal['value'] ?></span></b></h1>
                    <p>ORANG</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=u2a7sEOKbCE" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Apa Itu Virus Korona</h3>
            <p>Coronavirus adalah sekelompok virus RNA terkait yang menyebabkan penyakit pada mamalia dan burung.
               Mereka menyebabkan infeksi saluran pernafasan yang dapat berkisar dari yang ringan sampai yang mematikan.
               Penyakit ringan pada manusia termasuk beberapa kasus flu biasa (yang juga disebabkan oleh virus lain, terutama rhinovirus), sementara varietas yang lebih mematikan dapat menyebabkan SARS, MERS, dan COVID-19.
               Pada sapi dan babi menyebabkan diare, sedangkan pada tikus menyebabkan hepatitis dan encephalomyelitis.</p>
               <br>
            <h3>Hal-hal yang wajib dilakukan!</h3>
            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="https://lifestyle.kompas.com/read/2020/06/14/114606220/terbukti-pakai-masker-jadi-cara-terbaik-cegah-infeksi-covid-19">Memakai Masker</a></h4>
              <p class="description">Memakai masker wajah di tempat umum adalah cara yang paling efektif untuk mencegah penularan antar-manusia.</p>
            </div>
            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="https://www.kompas.com/sains/read/2020/04/01/170000123/cegah-penularan-virus-corona-jaga-jarak-minimal-dua-meter?page=all">Menjaga Jarak</a></h4>
              <p class="description">Alasan kita perlu menjaga jarak adalah karena virus corona SARS-CoV-2,
               mikroba yang bertanggung jawab pada terjadinya pandemi Covid-19 dapat menyebar di antara orang-orang yang berdekatan.</p>
            </div>
            <div class="icon-box">
              <div class="icon"><i class="icofont-heartbeat"></i></div>
              <h4 class="title"><a href="https://lifestyle.kompas.com/read/2020/08/21/182200620/ternyata-ini-rahasia-menjaga-kesehatan-di-masa-pandemi">Menjaga Kesehatan</a></h4>
              <p class="description">Dengan perbanyak olahraga, tubuh akan menjadi lebih sehat dan segar. Perbanyak mengkonsumsi makanan seperti sayur-sayur dan buah.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <div class="card-header">
                  <h3 class="card-title">Data Kasus Corona virus di Dunia</h3>
                  </div>
                      <div class="card-body" >
                          <div style="height:600px;overflow:auto;margin-right:15px;">
                            <table class="table table-bordered"  fixed-header  >
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Negara</th>
                                <th scope="col">Positif</th>
                                <th scope="col">Sembuh</th>
                                <th scope="col">Meninggal</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $no = 1;    
                            @endphp
                            <?php
                              for ($i= 0; $i <=191 ; $i++){
                            ?>
                            <tr>
                                <td> <?php echo $i+1 ?></td>
                                <td> <?php echo $dunia[$i]['attributes']['Country_Region'] ?></td>
                                <td> <?php echo $dunia[$i]['attributes']['Confirmed'] ?></td>
                                <td><?php echo $dunia[$i]['attributes']['Recovered']?></td>
                                <td><?php echo $dunia[$i]['attributes']['Deaths']?></td>
                            </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </section>
    <section id="doctors" class="doctors">
       <div class="row row-cards">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
             <div class="card">
                <div class="card-body">
                   <div class="table-responsive service">
                      <div class="card-header">
                         <h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
                      </div>
                      <table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
                        <thead>
                           <tr>
                             <th>No</th>
                             <th>Provinsi</th>
                             <th>Positif</th>
                             <th>Sembuh</th>
                             <th>Meninggal</th>
                           </tr>
                        </thead>
                        <tbody>
                        @php 
                        $no = 1;
                        @endphp
                        @foreach ($provinsi as $item)
                          <tr>
                              <td>{{$no++}}</td>
                              <td>{{$item->nama_provinsi}}</td>
                              <td>{{$item->jumlah_positif}}</td>
                              <td>{{$item->jumlah_sembuh}}</td>
                              <td>{{$item->jumlah_meninggal}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table> 
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Artikel</h2>
          <p>Temukan berbagai informasi kesehatan terkini dari sumber terpercaya.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('assets/assets/img/artikel/anak.webp')}}" width="320" height="180" alt="Berita"></div>
              <h6><a href="https://www.halodoc.com/artikel/jangan-panik-ini-cara-mengobati-radang-amandel-pada-anak">Jangan Panik, Ini Cara Mengobati Radang Amandel pada Anak</a></h6>
              <p>Radang amandel adalah salah satu gangguan yang terbilang rentan terjadi pada anak-anak.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('assets/assets/img/artikel/anak2.webp')}}" width="320" height="180" alt="Berita"></div>
              <h6><a href="https://www.halodoc.com/artikel/5-cara-menyapih-anak-agar-tidak-rewel">5 Cara Menyapih Anak Agar Tidak Rewel</a></h6>
              <p>Bagi beberapa ibu, menyapih anak tidak pernah menjadi hal yang mudah dilakukan.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('assets/assets/img/artikel/olahraga.webp')}}" width="320" height="180" alt="Berita"></div>
              <h6><a href="https://www.halodoc.com/artikel/super-sibuk-ini-7-jenis-olahraga-yang-bisa-dilakukan-di-kantor">Super Sibuk? Ini 7 Jenis Olahraga yang Bisa Dilakukan di Kantor</a></h6>
              <p>Seribu satu dalih menjadi alasan pekerja kantoran untuk meninggalkan olahraga. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('assets/assets/img/artikel/hidup.webp')}}" width="320" height="180" alt="Berita"></div>
              <h6><a href="https://www.halodoc.com/artikel/faktor-lingkungan-penyebab-penuaan-dini">Faktor Lingkungan Penyebab Penuaan Dini</a></h6>
              <p>Seiring bertambahnya usia, pasti ada saja perubahan pada tubuh yang dapat terjadi.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('assets/assets/img/artikel/ibu.webp')}}" width="320" height="180" alt="Berita"></i></div>
              <h6><a href="https://www.halodoc.com/artikel/pentingnya-menjaga-kesehatan-mental-saat-hamil">Pentingnya Menjaga Kesehatan Mental saat Hamil</a></h6>
              <p>Setiap wanita hamil wajib memperhatikan kesehatannya secara keseluruhan, baik dari fisik maupun mental.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('assets/assets/img/artikel/banjir2.webp')}}" width="320" height="180" alt="Berita"></div>
              <h6><a href="https://www.halodoc.com/artikel/musim-banjir-bisakah-corona-menular-lewat-air">Musim Banjir, Bisakah Corona Menular Lewat Air?</a></h6>
              <p>Banjir tengah melanda sejumlah wilayah di Indonesia. Di tengah pandemi virus corona yang masih terjadi.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>TraVid-19</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://github.com/anesfth1">Anesfth1</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/assets/js/main.js')}}"></script>

</body>

</html>