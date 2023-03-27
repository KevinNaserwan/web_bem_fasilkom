@extends('Layout/main')
@section('konten')
    <div id="wrapper">

        <!-- start header -->
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="img/logobem.png" alt="">
                </a>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="/beranda">Beranda</a></li>
                        <li><a href="/about" class="active">Tentang Kami</a></li>
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
        </header>
        <!-- end header -->

        <!-- section featured -->
        <section id="featured">

            <!-- slideshow start here -->

            <div class="camera_wrap" id="camera-slide">

                <!-- slide 1 here -->
                <div data-src="img/slides/camera/slide1/img1.jpg">
                    <div class="camera_caption fadeFromLeft">
                        <div class="container">
                            <div class="row">
                                <div class="span6">
                                    <h2 class="animated fadeInDown"><strong>Tentang <span class="colored">BEM KM Fasilkom
                                                UNSRI</span></strong></h2>
                                    <p class="animated fadeInUp"> BEM KM Fasilkom Unsri adalah Organisasi utama yang ada di
                                        Fasilkom Unsri yang menjadi wadah aspirasi mahasiswa Fasilkom Unsri</p>
                                    <a href="#struktur" class="btn btn-success btn-large animated fadeInUp">
                                        <i class="icon-link"></i> Read more
                                    </a>

                                </div>
                                <div class="span6">
                                    <img src="img/slides/camera/slide1/screen.png" alt=""
                                        class="animated bounceInDown delay1" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- slide 2 here -->
                <div data-src="img/slides/camera/slide2/img1.jpg">
                    <div class="camera_caption fadeFromLeft">
                        <div class="container">
                            <div class="row">
                                <div class="span6">
                                    <img src="img/slides/camera/slide2/iMac.png" alt="" />
                                </div>
                                <div class="span6">
                                    <h2 class="animated fadeInDown"><strong>Put your <span class="colored">Opt in
                                                form</span></strong></h2>
                                    <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet
                                        cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores
                                        appetere vim ut. Sea no tamquam reprimique.</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- slide 3 here -->
                <div data-src="img/slides/camera/slide2/img1.jpg">
                    <div class="camera_caption fadeFromLeft">
                        <div class="container">
                            <div class="row">
                                <div class="span12 aligncenter">
                                    <h2 class="animated fadeInDown"><strong><span class="colored">Responsive</span> and
                                            <span class="colored">cross broswer</span> compatibility</strong></h2>
                                    <p class="animated fadeInUp">Pellentesque habitant morbi tristique senectus et netus et
                                        malesuada</p>
                                    <img src="img/slides/camera/slide3/browsers.png" alt=""
                                        class="animated bounceInDown delay1" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- slideshow end here -->

        </section>
        <!-- /section -->
        <section id="struktur">
            <div id="container">
                <div class="row">



                    <div id="struktur" class="span6">
                        <h4 style="text-align:center" style="font-weight: bold;">Struktural
                            BEM</h4>


                        <div class="tabbable tabs-left">

                            <div class="tab-content">
                                <div class="tab-pane active" id="topone">
                                    <p>
                                        <strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex
                                        nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id,
                                        nostro patrioque qui id. Nominati eloquentiam in mea.
                                    </p>
                                    <p>
                                        <strong>Augue iriure </strong>No eum sanctus vituperata reformidans, dicant
                                        abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet
                                        referrentur eum et. Lorem ipsum dolor sit amet, populo commodo utroque ad nam, ei
                                        sit eruditi antiopam urbanitas. Pri no habeo
                                        debitis, aperiam perpetua id pro, meis etiam ne vix.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end tab -->

                    </div>

                    <div class="span6">
                        <h4 style="text-align:center" style="font-weight: bold;">Struktural
                            Badan Kesekretariatan</h4>


                        <div class="tabbable tabs-left">

                            <div class="tab-content">
                                <div class="tab-pane active" id="topone">
                                    <p>
                                        <strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex
                                        nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id,
                                        nostro patrioque qui id. Nominati eloquentiam in mea.
                                    </p>
                                    <p>
                                        <strong>Augue iriure </strong>No eum sanctus vituperata reformidans, dicant
                                        abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet
                                        referrentur eum et. Lorem ipsum dolor sit amet, populo commodo utroque ad nam, ei
                                        sit eruditi antiopam urbanitas. Pri no habeo
                                        debitis, aperiam perpetua id pro, meis etiam ne vix.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end tab -->

                    </div>

                </div>
            </div>
        </section>

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
    @endsection
