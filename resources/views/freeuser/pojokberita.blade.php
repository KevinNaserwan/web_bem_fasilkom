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
                    <li><a href="index.html" class="active">Beranda</a></li>
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
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="berita" class="berita d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="owl-carousel owl-theme text-start">
                    <div class="item">
                        <a href="berita-single.html">
                            <img src="img/test/9.png" alt="">
                            <h2>Fun Futsal Internal BEM KM Fasilkom</h2>
                            <p>32 Maret 2090</p>
                            <div class="card card-item"></div>
                        </a>

                    </div>
                    <div class="item">
                        <a href=""><img src="img/test/2.jpg" alt="">
                            <h2>Fun Futsal Internal BEM KM Fasilkom</h2>
                            <p>32 Maret 2090</p>
                            <div class="card card-item"></div>
                        </a>

                    </div>
                    <div class="item">
                        <img src="img/test/3.jpg" alt="">
                        <h2>Fun Futsal Internal BEM KM Fasilkom</h2>
                        <p>32 Maret 2090</p>
                        <div class="card card-item"></div>
                    </div>
                    <div class="item"><img src="img/test/4.jpg" alt="">
                        <h2>Fun Futsal Internal BEM KM Fasilkom</h2>
                        <p>32 Maret 2090</p>
                        <div class="card card-item"></div>
                    </div>
                    <div class="item"><img src="img/test/5.jpg" alt="">
                        <h2>Fun Futsal Internal BEM KM Fasilkom</h2>
                        <p>32 Maret 2090</p>
                        <div class="card card-item"></div>
                    </div>
                    <div class="item"><img src="img/test/6.jpg" alt="">
                        <h2>Fun Futsal Internal BEM KM Fasilkom</h2>
                        <p>32 Maret 2090</p>
                        <div class="card card-item"></div>
                    </div>
                    <div class="item"><img src="img/test/7.jpg" alt="">
                        <h2>Fun Futsal Internal BEM KM Fasilkom</h2>
                        <p>32 Maret 2090</p>
                        <div class="card card-item"></div>
                    </div>
                    <div class="item">
                        <img src="img/test/1.jpg" alt="">
                        <h2>Fun Futsal Internal BEM KM Fasilkom</h2>
                        <p>32 Maret 2090</p>
                        <div class="card card-item"></div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="berita" class="beritas pt-0">
            <div class="container justify-content-center" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pojok Berita</h2>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/test/9.png" alt="" class="img-fluid">
                                <div class="card-date"><span>18</span><br>December</div>
                            </div>
                            <h3><a href="berita-single.html" class="stretched-link">Fun Futsal Internal BEM KM
                                    Fasilkom</a></h3>
                            <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam
                                repellendus temporibus itaqueofficiis odit</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/test/9.png" alt="" class="img-fluid">
                                <div class="card-date"><span>18</span><br>December</div>
                            </div>
                            <h3><a href="berita-single.html" class="stretched-link">Storage</a></h3>
                            <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam
                                repellendus temporibus itaqueofficiis odit</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/test/9.png" alt="" class="img-fluid">
                                <div class="card-date"><span>18</span><br>December</div>
                            </div>
                            <h3><a href="berita-single.html" class="stretched-link">Storage</a></h3>
                            <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam
                                repellendus temporibus itaqueofficiis odit</p>
                        </div>
                    </div><!-- End Card Item -->
                </div>

            </div>

        </section><!-- End Services Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>Logis</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta
                        donna mare fermentum iaculis eu non diam phasellus.</p>
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
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
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

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="vendor/purecounter/purecounter_vanilla.js "></script>
    <script src="vendor/glightbox/js/glightbox.min.js "></script>
    <script src="vendor/swiper/swiper-bundle.min.js "></script>
    <script src="vendor/aos/aos.js "></script>
    <script src="vendor/php-email-form/validate.js "></script>
    <script src="node_modules/jquery/dist/jquery.min.js "></script>
    <script src="owlcarousel/dist/owl.carousel.min.js "></script>

    <!-- Template Main JS File -->
    <script src="js/main.js "></script>
    <script>
        $('.owl-carousel').owlCarousel({
            stagePadding: 50,
            center: true,
            loop: true,
            margin: 30,
            // nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>
@endsection
