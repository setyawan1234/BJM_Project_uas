<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BJM Bengkel Mobil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="home/assets/img/favicon.png" rel="icon">
    <link href="home/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="home/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="home/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">BJM</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                {{-- untuk mengecek apakah sudah login atau belum/sesition --}}
                @guest
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                <li><a class="nav-link scrollto active" href="/AboutUs">About</a></li>
                <li><a class="nav-link scrollto" href="/Contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="login">Log In</a></li>
                @else 
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                <li><a class="nav-link scrollto active" href="/AboutUs">About</a></li>
                <li><a class="nav-link scrollto" href="/Contact">Contact</a></li>
                <li><a class="nav-link scrollto" href="login">{{Auth::user()->nama}}</a></li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                                                               document.getElementById('logout-form').submit();">
                         Log Out    
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>BJM merupakan sebuah bengkel mobil yang khusus menangani car service, parts & trouble shooting yang berlokasi di Jl. Raya Kesambi No.3, Dusun Pojok, Lajuk, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274. Kami melayani segala perbaikan dan perawatan kendaraan roda empat, bensin maupun diesel dari segala jenis dan merk mobil.
          Bengkel mobil ini didirikan dan dirintis oleh Benny dan rekan-rekannya yang sudah berpengalaman memperbaiki mobil. Dengan didukung oleh tenaga/mekanik yang profesional dibidangnya, bengkel ini siap mengerjakan segala macam service mobil.</p>
        </div>

        <div class="row about-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="home/assets/img/portfolio/bengkel-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <a href="home/assets/img/portfolio/bengkel-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Situasi Bengkel BJM Saat Beroperasi"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="home/assets/img/portfolio/bengkel-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <a href="home/assets/img/portfolio/bengkel-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Situasi Bengkel BJM Saat Beroperasi"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="home/assets/img/portfolio/bengkel-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <a href="home/assets/img/portfolio/bengkel-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Situasi Bengkel BJM Saat Beroperasi"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

            <!-- ======= Footer ======= -->
            <footer id="footer">

                <div class="footer-newsletter">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h4>Bengkel Online Mobil</h4>
                                <p>Percayakan kepada mekanik kami untuk atasi berbagai permasalahan mobil Anda, dari</p>
                                <p>perawatan AC mobil hingga memaksimalkan perfoma mobil</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-md-6 footer-contact">
                                <h3>BJM</h3>
                                <p>Bengkel Mobil Sidoarjo <br>&copy; 2022 <strong><span>BJM</span></strong>. All Rights Reserved</p>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Link</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="/AboutUs">About us</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="/Contact">Contact</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="login">Login</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="register">Register</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Layanan Kami</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="login">Penyedia Service Panggilan</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="login">Diagnosa Kerusakan Mobil</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="login">Sistem Sewa</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="login">Service Mobil</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>IKUTI KAMI</h4>
                                <p>BJM mempunyai beberapa layanan Sosial Media yang bisa Anda kunjungi</p>
                                <div class="social-links mt-3">
                                    <a target="_blank"href="https://wa.me/628507569129" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>Whatsapp
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container footer-bottom clearfix">
                    <div class="copyright">
                        &copy; Copyright <strong><span>BJM Bengkel</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by Kelompok 6 - TI 3E
                    </div>
                </div>
            </footer><!-- End Footer -->

<!-- Vendor JS Files -->
            <script src="home/assets/vendor/aos/aos.js"></script>
            <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="home/assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="home/assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="home/assets/vendor/waypoints/noframework.waypoints.js"></script>
            <script src="home/assets/vendor/php-email-form/validate.js"></script>

            <!-- Template Main JS File -->
            <script src="home/assets/js/main.js"></script>

</body>

</html>
