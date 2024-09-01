<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kabupaten Purwakarta|badan amil zakat nasional</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('assets') ?>/img/logobadnas.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('assets') ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets') ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->

    <!-- Navbar Start -->
    <div class="bg-warning p-2">
        <div class="copyright text-center">
            <div class="col-md-10 text-center text-md-start text-warning mb-3 mb-md-0">
                &copy; <a class=" text-dark" href="kontak">Jln. Jend. Ahmad Yani No.Kelurahan Cipaisan Kecamatan Purwakarta Kabupaten Purwakarta 41113.</a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="beranda" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-success">
                <img src="<?php echo base_url('assets') ?>/img/logobadnas.png" alt="" height="60px">
                <h6 class="text-success">Badan Amil Zakat Nasional</h6>
            </h2>
        </a>
        <div class="d-flex align-items-center mb-3">
            <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 20px; height: 20px;">
                <i class="far fa-envelope-open text-success"></i>
            </div>
            <div class="ms-3">
                <h5 class="text-success"></h5>
                <h6 class="text-success">baznaskab.purwakarta@baznas.go.id</h6>
            </div>
        </div>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav ms-auto p-0 p-lg-2">
                <button type="button" class="btn btn-black  py-2 px-1" onclick="location.href='<?php echo base_url('beranda') ?>'">BERANDA</button>
                &nbsp;&nbsp;
                <button type="button" class="btn btn-black  py-2 px-2" onclick="location.href='<?php echo base_url('tentang_kami') ?>'">TENTANG KAMI</button>
                &nbsp;&nbsp;
                <button type="button" class="btn btn-black  py-2 px-1" onclick="location.href='<?php echo base_url('kontak') ?>'">KONTAK</button>
                &nbsp;&nbsp;
                <button type="button" class="btn btn-success py-2 px-1" onclick="location.href='<?php echo base_url('infaq') ?>'">INFAQ</button>
                &nbsp;&nbsp;
                <button type="button" class="btn btn-warning py-2 px-1" onclick="location.href='<?php echo base_url('zakat') ?>'">ZAKAT</button>
            </div>
        </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> <?php echo $this->session->flashdata('message'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php endif; ?>

    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title bg-white text-center text-success px-3">Kontak</h5>
                <h1 class="mb-5"></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- Alamat -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success" style="width: 50px; height: 50px;">
                            <i class="fas fa-map-marked-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="text-dark text-center text-bold">Alamat Baznas Purwakarta</h6>
                            <p class="mb-0">Jln. Jend. Ahmad Yani No.Kelurahan Cipaisan Kecamatan Purwakarta Kabupaten Purwakarta 41113.</p>
                        </div>
                    </div>
                    <!-- No. Telepon -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-success">No.Tlp</h5>
                            <p class="mb-0">(0264) 200680</p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-success">Email</h5>
                            <p class="mb-0">baznaskab.purwakarta@baznas.go.id</p>
                        </div>
                    </div>
                    <!-- WhatsApp -->
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success" style="width: 50px; height: 50px;">
                            <i class="bi bi-whatsapp text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-success">Whatsapp</h5>
                            <a class="text-success" href="https://api.whatsapp.com/send?phone=6287834714671&text=Assalamu%27alaikum%20Baznas%20Purwakarta..%0D%0Asaya%20mau%20dijemput%20zakatnya%20di%20alamat%20..." target="_blank"> +6287834714671</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-dark text-center text-bold">Lokasi Baznas Purwakarta</h6>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.740583063812!2d107.4344749093341!3d-6.554398693411298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690f335c9fb515%3A0x97353e82fa586dc4!2sBAZNAS%20Kabupaten%20Purwakarta!5e0!3m2!1sid!2sid!4v1722627647460!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-dark text-center text-bold">Layanan Konsultasi</h6>
                    <form method="POST" action="<?php echo base_url('kontak/simpan') ?>">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="perihal" class="form-control" id="perihal" placeholder="perihal" required>
                                    <label for="perihal">Perihal</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="tulis_pesan" name="tulis_pesan" id="tulis_pesan" style="height: 150px" required></textarea>
                                    <label for="tulis_pesan">Tulis Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success w-100 py-3" type="sumbit" value="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-success text-light footer pt-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h2 class="m-0 text-primary">
                        <img src="<?php echo base_url('assets') ?>/img/logof.png" alt="" height="140px">
                        <!-- <span class="text-success"></span> -->
                    </h2>
                    <p>Jln. Jend. Ahmad Yani No.79
                        Kelurahan Cipaisan
                        Kecamatan Purwakarta
                        Kabupaten Purwakarta 41113.</p>
                    <div class="d-flex ">
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/baznas.purwakarta/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://web.facebook.com/baznaskabpurwakarta" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/results?sp=mAEB&search_query=baznas+purwakarta" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://x.com/baznaspwk" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@baznas.purwakarta" target="_blank"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://api.whatsapp.com/send?phone=6287834714671&text=Assalamu%27alaikum%20Baznas%20Purwakarta..%0D%0Asaya%20mau%20dijemput%20zakatnya%20di%20alamat%20..." target="_blank"" target=" _blank"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-warning">
                        <i class="fas fa-home text-warning">
                        </i>
                        Kenali Kami
                    </h5>
                    <a href="beranda">
                        <p class="text-white">beranda</p>
                    </a>
                    <a href="tentang_kami">
                        <p class="text-white">Tentang Kami</p>
                    </a>
                    <a href="kontak">
                        <p class="text-white">Kontak</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-warning">
                        <i class="fas fa-donate text-warning">
                        </i>
                        Program
                    </h5>
                    <a href="infaq">
                        <p class="text-white">Infaq</p>
                    </a>
                    <a href="zakat">
                        <p class="text-white">Zakat</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-warning">
                        <i class="fas fa-landmark text-warning">
                        </i>
                        Patner
                    </h5>
                    <a class="" href="https://purwakartakab.go.id/" target="_blank">
                        <p class="text-white">baznas Purwakarta</p>
                    </a>
                    <a class="" href="https://baznas.go.id/" target="_blank">
                        <p class="text-white">baznas RI</p>
                    </a>
                    <a class="" href="https://www.baznasjabar.org/" target="_blank">
                        <p class="text-white">Baznas jabar </p>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-10 text-center text-md-start text-warning mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-white" href="kontak">Kebijakan Privasi | Syarat Ketentuan | FAQ</a>
                    </div>
                    <div class="col-md-3text-center text-md-end">
                        <div class="footer-menu">
                            <a href="<?php echo base_url('beranda') ?>">Beranda</a>
                            <a href="<?php echo base_url('tentang_kami') ?>">Tentang Kami</a>
                            <a href="<?php echo base_url('Kontak') ?>">Kontak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <div class="bg-warning p-2">
        <div class="copyright">
            <div class="col-md-10 text-center text-md-start text-warning mb-3 mb-md-0">
                &copy; <a class="border-bottom text-dark" href="kontak">Kebijakan Privasi | Syarat Ketentuan | FAQ</a>
            </div>
            <div class="row">
                <div class="col-md-3text-center text-md-end">
                    <div class="footer-menu text-dark ">
                        <a class="text-dark" href="<?php echo base_url('beranda') ?>">Beranda |</a>
                        <a class="text-dark" href="<?php echo base_url('tentang_kami') ?>">Tentang Kami |</a>
                        <a class="text-dark" href="<?php echo base_url('Kontak') ?>">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="	fas fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets') ?>/js/main.js"></script>
</body>

</html>