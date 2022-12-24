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
                <li><a class="nav-link scrollto" href="/AboutUs">About</a></li>
                <li><a class="nav-link scrollto active" href="/Contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="login">Log In</a></li>
                @else
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="/AboutUs">About</a></li>
                <li><a class="nav-link scrollto active" href="/Contact">Contact</a></li>
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

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Contact</h2>
                <p>Anda dapat menghubungi/menemukan kami di: </p>
              </div>

              <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                  <div class="info">
                    <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Lokasi:</h4>
                      <p><a target = "_blank" href="https://goo.gl/maps/75T63qDFUe1XZoEp9">Jl. Raya Kesambi No.3, Dusun Pojok, Lajuk, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274</a></p>
                    </div>

                    <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p><a href = "mailto:BJMSidoarjo@gmail.com?">BJMSidoarjo@gmail.com</p>
                    </div>

                    <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Telepon:</h4>
                      <p><a target= " _blank " href="https://api.whatsapp.com/send?phone=6285707569129&text=Saya%20ingin%20menyervis%20mobil%20saya%20di%20bengkel%20anda">085707569129</a></p>
                    </div>

                  </div>

                </div>

                <div class="col-lg-7 mt-10 mt-lg-0 d-flex align-items-stretch">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.459031940696!2d112.67046461477642!3d-7.52480609457274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7df2c41973f91%3A0x4a3239af14dfa6c2!2sBENGKEL%20MOBIL%20BJM%20PORONG!5e0!3m2!1sid!2sid!4v1667287859673!5m2!1sid!2sid"  frameborder="0" style="border:0; width: 208%; height: 400px;" allowfullscreen></iframe>
                      </div>
                        {{-- <label for="name">Masukkan Nama</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Masukkan Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="name">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group">
                      <label for="name">Pesan</label>
                      <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Pesanmu telah terkirim. Terima Kasih</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div> --}}
                  </form>
                </div>

              </div>

            </div>
          </section><!-- End Contact Section -->
        </div>
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
