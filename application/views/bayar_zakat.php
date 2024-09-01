<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Baznas Purwakarta | Badan Amil Zakat Nasional Kab.Purwakarta</title>
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
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo $this->config->item('midtrans_client_key'); ?>"></script>
</head>

<body>
    <!-- Spinner Start -->

    <div class="bg-warning p-1">
        <div class="copyright text-center">
            <div class="col-md-10 text-center text-md-start text-warning mb-3 mb-md-0">
                &copy; <a class=" text-dark" href="kontak">Jln. Jend. Ahmad Yani No.Kelurahan Cipaisan Kecamatan Purwakarta Kabupaten Purwakarta Kode Pos 41113.</a>
            </div>
        </div>
    </div>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="beranda" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-success">
                <img src="<?php echo base_url('assets') ?>/img/logobadnas.png" alt="" height="60px">
                <h6 class="text-success">Badan Amil Zakat Nasional</h6>
            </h2>
        </a>
        <!-- <a href="kontak" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-success">
                <i class="bi bi-whatsapp"></i>
                <h6 class="text-success"> +6287834714671</h6>
            </h2>
        </a> -->
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
    </nav>
    <!-- Navbar End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="" data-wow-delay="0.1s" style="min-height: 550px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?php echo base_url('assets') ?>/img/baru2.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <div class="container py-8">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <!-- Nama Input -->
                <div class="mb-3">
                    <label for="exampleInputNama" class="form-label">Nama</label>
                    <input value="<?= $data_bayar['nama']; ?>" readonly name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
                </div>

                <!--jenis Zakat-->
                <div class="mb-3">
                    <label for="exampleInputzakat" class="form-label">Zakat</label>
                    <select class="form-select" id="exampleInputzakat" aria-label="Default select example">
                        <option selected>Pilih Jenis Zakat</option>
                        <option value="1">Zakat Maal</option>
                        <option value="2">Zakat Penghasilan</option>
                    </select>
                </div>



                <!-- Nominal Input -->
                <div class="mb-3">
                    <label for="exampleInputNominal" class="form-label">Nominal</label>
                    <input value="<?= $data_bayar['nominal']; ?>" readonly name="nominal" type="number" class="form-control" id="exampleInputNominal" aria-describedby="nominalHelp">
                </div>

                <!-- Email Input -->
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email</label>
                    <input value="<?= $data_bayar['email']; ?>" readonly name="nominal" type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                </div>

                <!-- No HP Input -->
                <div class="mb-3">
                    <label for="exampleInputNoHP" class="form-label">No HP</label>
                    <input value="<?= $data_bayar['no_hp']; ?>" readonly name="no_hp" type="tel" class="form-control" id="exampleInputNoHP" aria-describedby="nohpHelp">
                </div>

                <!-- Submit Button -->
                <button id="pay-button" class="btn btn-success">Bayar</button>
                <a class="btn btn-warning">Batal</a>

            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-success text-light footer pt-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h2 class="m-0 text-primary">
                        <img src="<?php echo base_url('assets') ?>/img/logof.png" alt="" height="140px">
                        <!-- <span class="text-success"></span> -->
                    </h2>
                    <p>Jln. Jend. Ahmad Yani No. 79
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
    <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets') ?>/js/main.js"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            snap.pay('<?php echo $snap_token; ?>', {
                onSuccess: function(result) {
                    console.log(result);
                },
                onPending: function(result) {
                    console.log(result);
                },
                onError: function(result) {
                    console.log(result);
                }
            });
        };
    </script>
</body>

</html>