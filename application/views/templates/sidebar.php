<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img width="60px" src="<?= base_url('assets/img/logo-admin.png') ?>" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= $page == "dashboard" ? "active" : ""; ?>">
        <a class="nav-link " href="<?= base_url("admin/dashboard") ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Informasi Berita
    </div>

    <li class="nav-item <?= $page == "slide-show" ? "active" : ""; ?>">
        <a class="nav-link" href="<?= base_url("admin/slide_show") ?>">
            <i class="fa-solid fa-panorama"></i>
            <span>Slide Show</span>
        </a>
    </li>
    <li class="nav-item <?= $page == "berita" ? "active" : ""; ?>">
        <a class="nav-link" href="<?= base_url("admin/berita") ?>">
            <i class="fa-regular fa-newspaper"></i>
            <span>Berita</span>
        </a>
    </li>

    <li class="nav-item <?= $page == "gallery" ? "active" : ""; ?>">
        <a class="nav-link" href="<?= base_url("admin/gallery") ?>">
            <i class="fa-regular fa-images"></i>
            <span>Gallery</span>
        </a>
    </li>
    <li class="nav-item <?= $page == "pesan" ? "active" : ""; ?>">
        <a class="nav-link" href="<?= base_url("admin/message") ?>">
            <i class="fa-regular fa-message"></i>
            <span>Pesan</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->


</ul>
<!-- End of Sidebar -->