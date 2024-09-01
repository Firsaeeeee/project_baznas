<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    if ($this->session->flashdata("fail")) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata("fail")  ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata("success")) {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata("success")  ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Berita</h1> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fa-regular fa-images me-2"></i>Gellery</li>

        </ol>
    </nav>
    <div class="d-flex mb-3">
        <a href="<?= base_url("admin/gallery/tambah") ?>" class="btn btn-success"><i class="fa-solid fa-square-plus me-2"></i>Tambah Image</a>
    </div>
    <div class="row">
        <?php
        foreach ($albums as $album) {
        ?>
            <div class="col-md-3 mb-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url("admin/gallery/foto/") . $album["id"] ?>">

                                <?= $album["nama_album"] ?>
                            </a>

                            <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#HapusAlbum" data-whatever="<?= $album["id"] ?>">
                                <i class="fa-solid fa-trash me-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->