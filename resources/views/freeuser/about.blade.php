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

        <!-- owlcarousel kabinet start -->
        <div class="owl-carousel owl-theme" style="padding-top: 9rem;">
            <div class="item" data-merge="3">
                <img src="img/aboutUs/cardInti.png" class="card-img-top" alt="...">
            </div>
            <div class="item" data-merge="3">
                <img src="img/aboutUs/CardBphAdministrasi.png" class="card-img-top" alt="...">
            </div>
            <div class="item" data-merge="3">
                <img src="img/aboutUs/CardBphBismit.png" class="card-img-top" alt="...">
            </div>
            <div class="item" data-merge="3">
                <img src="img/aboutUs/CardBphKastrad.png" class="card-img-top" alt="...">
            </div>
            <div class="item" data-merge="3">
                <img src="img/aboutUs/CardBphMedinfo.png" class="card-img-top" alt="...">
            </div>
            <div class="item" data-merge="3">
                <img src="img/aboutUs/CardBphOlahRaga.png" class="card-img-top" alt="...">
            </div>
            <div class="item" data-merge="3">
                <img src="img/aboutUs/CardBphPPSDM.png" class="card-img-top" alt="...">
            </div>
            <div class="item" data-merge="3">
                <img src="img/aboutUs/CardBphRelasi.png" class="card-img-top" alt="...">
            </div>
            <div class="item" data-merge="3">
                <img src="img/aboutUs/CardBphRistek.png" class="card-img-top" alt="...">
            </div>
            <div class="item" data-merge="3">
                <img src="img/aboutUs/CardBphSenbud.png" class="card-img-top" alt="...">
            </div>
            <div class="item" data-merge="3">
                <img src="img/aboutUs/CardBphSosmasling.png" class="card-img-top" alt="...">
            </div>
        </div>
        <!-- owlcarousel end -->

        <!-- struktur inti -->
        <section id="struktur">
        <div class="container text-center">
            <div class="section-header">
                <h2 style="text-align: center; color: #EBC754; font-weight: bold;">INTI</h2>
            </div>      
            <div class="row">
                <div data-aos="fade-right" class="col">
                    <img src="img/aboutUs/ketua.png" style="width: 100%; position: relative;" alt="">
                </div>
                <div data-aos="fade-left" class="col">
                    <img src="img/aboutUs/wakilketua.png" style="width: 100%; position: relative;" alt="">
                </div>
            </div>
            <br>
            <div class="row">
                <div data-aos="fade-right" class="col">
                    <img src="img/aboutUs/staffkhususketua.png" style="width: 100%;" alt="">
                </div>
                <div data-aos="fade-left" class="col">
                    <img src="img/aboutUs/staffkhususwakilketua.png" style="width: 100%;" alt="">
                </div>
            </div>
            <br>
            <div class="row">
                <div data-aos="fade-right" class="col">
                    <img src="img/aboutUs/bendaharaumum.png" style="width: 100%;" alt="">
                </div>
                <div data-aos="fade-left" class="col">
                    <img src="img/aboutUs/sekretarisumum.png" style="width: 100%;" alt="">
                </div>
            </div>
        </div>
        </section>
        <!-- end of struktur inti -->
        
        <!-- bidang internal -->
        <div class="section-header">
            <h2 style="text-align: center; color: #EBC754; font-weight: bold;">BIDANG INTERNAL</h2>
        </div>        
        <img data-aos="fade-up" src="img/aboutUs/Card-Internal.png" alt="" style="width: 100%; padding-bottom: 3rem;">
        <div class="container text-center">
            <div class="row" style="padding-bottom: 2rem;">
                    <div data-aos="fade-right" class="col">
                        <img src="img/aboutUs/koordinator_bidang.png" style="width: 100%;" alt="">
                    </div>
                    <div data-aos="fade-left" class="col">
                        <img src="img/aboutUs/wakil_koor_bidang.png" style="width: 100%;" alt="">
                    </div>
            </div>
            <div class="row gx-5" style="padding-bottom: 2rem;">
                <div class="col">
                    <div class="section-header" style="padding: none;">
                        <h2 style="text-align: center; color: #EBC754; font-weight: bold;">Dinas PPSDM</h2>
                    </div>     
                    <img src="img/aboutUs/anggota_ppsdm.png" style="width: 100%; padding-bottom: 3rem;" alt="">
                    <br>
                    <p style="font-weight: bold; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam</p>
                </div>
                <div class="col">
                    <div class="section-header" style="padding: none;">
                        <h2 style="text-align: center; color: #EBC754; font-weight: bold;">Dinas Administrasi</h2>
                    </div>    
                    <img src="img/aboutUs/anggota_administrasi.png" style="width: 100%; padding-bottom: 3rem;" alt="">
                    <p style="font-weight: bold; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam</p>
                </div>
            </div>
        </div>
        <!-- end of bidang internal -->

        <!-- bidang eksternal-->
        <div class="section-header">
            <h2 style="text-align: center; color: #EBC754; font-weight: bold;">BIDANG EKSTERNAL</h2>
        </div>        
        <img data-aos="fade-up" src="img/aboutUs/card-eksternal.png" alt="" style="width: 100%; padding-bottom: 3rem;">
        <div class="container text-center">
            <div class="row" style="padding-bottom: 2rem;">
                    <div data-aos="fade-right" class="col">
                        <img src="img/aboutUs/korbid-eksternal.png" style="width: 100%;" alt="">
                    </div>
                    <div data-aos="fade-left" class="col">
                        <img src="img/aboutUs/wakorbid-eksternal.png" style="width: 100%;" alt="">
                    </div>
            </div>
            <div class="row gx-5" style="padding-bottom: 2rem;">
                <div class="col">
                    <div class="section-header" style="padding: none;">
                        <h2 style="text-align: center; color: #EBC754; font-weight: bold;">Dinas KASTRAD</h2>
                    </div>     
                    <img src="img/aboutUs/kastrad-member.png" style="width: 100%; padding-bottom: 3rem;" alt="">
                    <br>
                    <p style="font-weight: bold; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam</p>
                </div>
                <div class="col">
                    <div class="section-header" style="padding: none;">
                        <h2 style="text-align: center; color: #EBC754; font-weight: bold;">Dinas Sosmasling</h2>
                    </div>    
                    <img src="img/aboutUs/sosmasling-member.png" style="width: 100%; padding-bottom: 3rem;" alt="">
                    <p style="font-weight: bold; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam</p>
                </div>
            </div>
        </div>
        <!-- end of bidang eksternal -->

        <!-- bidang Relasi dan mitra -->
        <div class="section-header">
            <h2 style="text-align: center; color: #EBC754; font-weight: bold;">BIDANG RELASI DAN MITRA</h2>
        </div>        
        <img data-aos="fade-up" src="img/aboutUs/card-retra.png" alt="" style="width: 100%; padding-bottom: 3rem;">
        <div class="container text-center">
            <div class="row" style="padding-bottom: 2rem;">
                    <div data-aos="fade-right" class="col">
                        <img src="img/aboutUs/korbid-retra.png" style="width: 100%;" alt="">
                    </div>
                    <div data-aos="fade-left" class="col">
                        <img src="img/aboutUs/wakorbid-retra.png" style="width: 100%;" alt="">
                    </div>
            </div>
            <div class="row gx-5" style="padding-bottom: 2rem;">
                <div class="col">
                    <div class="section-header" style="padding: none;">
                        <h2 style="text-align: center; color: #EBC754; font-weight: bold;">Dinas Relasi</h2>
                    </div>     
                    <img src="img/aboutUs/relasi-member.png" style="width: 100%; padding-bottom: 3rem;" alt="">
                    <br>
                    <p style="font-weight: bold; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam</p>
                </div>
                <div class="col">
                    <div class="section-header" style="padding: none;">
                        <h2 style="text-align: center; color: #EBC754; font-weight: bold;">Dinas Bismit</h2>
                    </div>    
                    <img src="img/aboutUs/bismit-member.png" style="width: 100%; padding-bottom: 3rem;" alt="">
                    <p style="font-weight: bold; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam</p>
                </div>
            </div>
        </div>
        <!-- end of Relasi dan Mitra -->

        <!-- bidang media dan teknologi -->
        <div class="section-header">
            <h2 style="text-align: center; color: #EBC754; font-weight: bold;">BIDANG MEDIA DAN TEKNOLOGI</h2>
        </div>        
        <img data-aos="fade-up" src="img/aboutUs/Card-medtek.png" alt="" style="width: 100%; padding-bottom: 3rem;">
        <div class="container text-center">
            <div class="row" style="padding-bottom: 2rem;">
                    <div data-aos="fade-right" class="col">
                        <img src="img/aboutUs/korbid-medtek.png" style="width: 100%;" alt="">
                    </div>
                    <div data-aos="fade-left" class="col">
                        <img src="img/aboutUs/wakorbid-medtek.png" style="width: 100%;" alt="">
                    </div>
            </div>
            <div class="row gx-5" style="padding-bottom: 2rem;">
                <div class="col">
                    <div class="section-header" style="padding: none;">
                        <h2 style="text-align: center; color: #EBC754; font-weight: bold;">Dinas MEDINFO</h2>
                    </div>     
                    <img src="img/aboutUs/medinfo-member.png" style="width: 100%; padding-bottom: 3rem;" alt="">
                    <br>
                    <p style="font-weight: bold; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam</p>
                </div>
                <div class="col">
                    <div class="section-header" style="padding: none;">
                        <h2 style="text-align: center; color: #EBC754; font-weight: bold;">Dinas RISTEK</h2>
                    </div>    
                    <img src="img/aboutUs/ristek-member.png" style="width: 100%; padding-bottom: 3rem;" alt="">
                    <p style="font-weight: bold; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam</p>
                </div>
            </div>
        </div>
        <!-- end of media dan teknologi -->

        <!-- bidang minat dan bakat -->
        <div class="section-header">
            <h2 style="text-align: center; color: #EBC754; font-weight: bold;">BIDANG MINAT DAN BAKAT</h2>
        </div>        
        <img data-aos="fade-up" src="img/aboutUs/card-minbat.png" alt="" style="width: 100%; padding-bottom: 3rem;">
        <div class="container text-center">
            <div class="row" style="padding-bottom: 2rem;">
                    <div data-aos="fade-right" class="col">
                        <img src="img/aboutUs/korbid-minbat.png" style="width: 100%;" alt="">
                    </div>
                    <div data-aos="fade-left" class="col">
                        <img src="img/aboutUs/wakorbid-minbat.png" style="width: 100%;" alt="">
                    </div>
            </div>
            <div class="row gx-5" style="padding-bottom: 2rem;">
                <div class="col">
                    <div class="section-header" style="padding: none;">
                        <h2 style="text-align: center; color: #EBC754; font-weight: bold;">Dinas Olah Raga</h2>
                    </div>     
                    <img src="img/aboutUs/olahraga-member.png" style="width: 100%; padding-bottom: 3rem;" alt="">
                    <br>
                    <p style="font-weight: bold; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam</p>
                </div>
                <div class="col">
                    <div class="section-header" style="padding: none;">
                        <h2 style="text-align: center; color: #EBC754; font-weight: bold;">Dinas Seni Budaya</h2>
                    </div>    
                    <img src="img/aboutUs/senibudaya-member.png" style="width: 100%; padding-bottom: 3rem;" alt="">
                    <p style="font-weight: bold; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam</p>
                </div>
            </div>
        </div>
        <!-- end of minat dan bakat -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer" style="background-color: #22162B;">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-3 footer-info" style="text-align: center;">
                        <a href="/beranda">
                            <img src="img/logo_cakra_baswara.png" alt="" style="width: 50%;">
                        </a>
                    </div>

                    <div class="col footer-links">
                        <h4 style="padding-bottom: 0.5rem; margin-block-end: 0px;">BEM KM FASILKOM UNSRI</h4>
                        <p>#Kabinet Cakra Baswara</p>
                    </div>

                    <div class="col footer-links">
                        <h4 style="padding-bottom: 0.5rem; margin-block-end: 0px;">Kesekretariatan</h4>
                        <p>Gedung Fakultas Ilmu Komputer Kampus Unsri Indralaya km 33</p>
                        <br>
                        <h4 style="padding-bottom: 0.5rem; margin-block-end: 0px;">Contact Us</h4>
                        <p>@bemilkomunsri (Line)</p>

                    </div>

                    <div class="col footer-contact text-center text-md-start">
                        <h4>Follow For More</h4>
                        <div class="social-links d-flex mt-4">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container mt-4">
                <div class="copyright">
                    &copy; <strong>BEM KM FASILKOM UNSRI 2023 | Kabinet Cakra Baswara</strong>.
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
                    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                </div>
            </div>

        </footer><!-- End Footer -->
        <!-- End Footer -->



        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>
    @endsection
