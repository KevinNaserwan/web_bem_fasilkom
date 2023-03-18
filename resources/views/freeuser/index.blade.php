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
                    <li><a href="/about">Tentang Kami</a></li>
                    <li><a href="profil.html">Profil</a></li>
                    <li><a href="/berita">Pojok Berita</a></li>
                    <li><a href="majalah.html">E-Majalah</a></li>
                    <li><a href="birokrasi.html">Birokrasi Terkini</a></li>
                    <li class="dropdown"><a href="#"><span>BEM APPS</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">FLC</a></li>
                            <li><a href="#">GASPOL</a></li>
                            <li><a href="#">Shortlink</a></li>
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
                    <h2 data-aos="fade-up">KABINET CAKRA BASWARA</h2>
                    <h3 data-aos="fade-up">#MenggapaiAsaCiptakanKarya</h3>
                    <p data-aos="fade-up" data-aos-delay="100">Cakra Baswara akan menjadi wadah kolaborasi yang Inklusif,
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
                    <div class="Ornament1" data-aos="fade-up" data-aos-delay="100">
                        <img src="img/Ornament.png" alt="" width="110" height="110">
                    </div>
                    <div class=" text-center font-weight-bold judul-birokrasi">
                        <h4>POJOK BERITA</h4>
                        <div class=" justify-content-center">
                            <img src="img/BarPojok(2).png" height="10">
                        </div>
                    </div>
                    <div class="justify-content-center" class="card">
                        <div class=" col-lg-3 col-md-6 berita-card">
                            <a href=""><img src="img/card-image.png" alt=""></a>
                            <div class=" content">
                                <h3>Fasilkom Esport Competition</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et duis nibh velit ultrices
                                    adipiscing id diam.</p>
                                <div class="details">
                                    <a href="">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 berita-card1">
                            <a href=""><img src="img/card-image.png" alt=""></a>
                            <div class=" content">
                                <h3>Fasilkom Esport Competition</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et duis nibh velit ultrices
                                    adipiscing id diam.</p>
                                <div class="details">
                                    <a href="">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 berita-card2">
                            <a href=""><img src="img/card-image.png" alt=""></a>
                            <div class=" content">
                                <h3>Fasilkom Esport Competition</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et duis nibh velit ultrices
                                    adipiscing id diam.</p>
                                <div class="details">
                                    <a href="">Details</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 berita-card3">
                            <a href=""><img src="img/card-image.png" alt=""></a>
                            <div class=" content">
                                <h3>Fasilkom Esport Competition</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et duis nibh velit ultrices
                                    adipiscing id diam.</p>
                                <div class="details">
                                    <a href="">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Ornament" data-aos="fade-up" data-aos-delay="100">
                        <img src="img/Ornament.png" alt="" width="110" height="110">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pojok Berita Section -->

        <!-- ======= Birokrasi Terkini Section ======= -->
        <section id="berita-terkini" class="berita-terkini">
            <div class="container" data-aos="zoom-out">
                <div class=" row justify-content-center">
                    <!-- Slider -->
                    <div class="container carousel">
                        <div class="slide active">
                            <img src="img/gambar-birokrasi.png">
                        </div>
                        <div class=" slide next">
                            <img src="img/gambar-birokrasi.png">
                        </div>
                        <div class="slide">
                            <img src="img/gambar-birokrasi.png">
                        </div>
                        <div class="slide">
                            <img src="img/gambar-birokrasi.png">
                        </div>
                        <div class="slide prev">
                            <img src="img/gambar-birokrasi.png">
                        </div>
                        <div class="button-container">
                            <div class="button" id="left"><i class="fas fa-angle-left"></i></div>
                            <div class="button" id="right"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                    <!-- End Slider -->
                    <div class="col-lg-6 col-md-12 text-center mt-5 birokrasi" data-aos="fade-up" data-aos-delay="100">
                        <div class=" text-center font-weight-bold judul-birokrasi">
                            <h4>Birokrasi Terkini</h4>
                            <div class=" justify-content-center">
                                <img src="img/BarPojok.png" height="10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Birokrasi Terkini Section -->
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
