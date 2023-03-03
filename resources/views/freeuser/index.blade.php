@extends('Layout/main')
@section('konten')
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="img/bemc.svg" alt="">
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/beranda" class="active">Beranda</a></li>
                    <li><a href="about.html">Tentang Kami</a></li>
                    <li><a href="profil.html">Profil</a></li>
                    <li><a href="berita.html">Pojok Berita</a></li>
                    <li><a href="majalah.html">E-Majalah</a></li>
                    <li><a href="birokrasi.html">Birokrasi Terkini</a></li>
                    <li class="dropdown"><a href="#"><span>BEM APPS</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h4 data-aos="fade-up">BEM KM FASILKOM UNSRI 2022</h4>
                    <h2 data-aos="fade-up">KABINET ASKARA AKASIA</h2>
                    <h3 data-aos="fade-up">#BertumbuhBerkaryaBersama</h3>
                    <p data-aos="fade-up" data-aos-delay="100">Askara Akasia akan menjadi wadah kolaborasi yang Inklusif,
                        Dedikatif, dan Progresif untuk kebermanfaatan bagi KM Fasilkom UNSRI.</p>
                </div>

                <div class="col-lg-4 order-1 order-lg-2 hero-img text-center" data-aos="zoom-out">
                    <img src="img/bemc.svg " class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">

                <div class="row justify-content-start">
                    <div class="col-lg-5 lebih-dekat order-lg-1 text-lg-start text-center">
                        <h4>Lebih dekat dengan</h4>
                        <h3>BEM KM FASILKOM UNSRI 2022</h3>
                        <a class="cta-btn" href="#">Selengkapnya</a>
                    </div>
                    <div class="col-lg-7 order-lg-2 inti-img text-center" data-aos="zoom-out">
                        <img src="img/inti.png" class="img-fluid mb-3 mb-lg-0">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- ======= Pojok Berita Section ======= -->
        <section id="pojok-berita" class="pojok-berita">
            <div class="container" data-aos="zoom-out">
                <div class=" row justify-content-center">
                    <div class=" text-center font-weight-bold">
                        <h4>POJOK BERITA</h4>
                        <div class=" justify-content-center">
                            <img src="img/BarPojok.png" height="10">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Pojok Berita Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>Logis</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies
                        darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br> New York, NY 535022<br> United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    {{-- <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div> --}}
@endsection
