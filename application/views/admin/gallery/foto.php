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
            <li class="breadcrumb-item active"><a href="<?= base_url("admin/gallery") ?>">Gallery</a></li>
            <li class="breadcrumb-item active">Foto</li>

        </ol>
    </nav>

    <div class="row">
        <?php
        foreach ($photos as $photo) {
        ?>
            <div class="col-md-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <img src="<?= base_url("assets/upload/gallery/") . $photo['image'] ?>" alt="" class="img-thumbnail" width="100%">
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url("admin/gallery/hapus/") . $photo['id'] . "/" . $this->uri->segment(4) ?>" class="text-secondary">
                            <i class="fa-solid fa-trash float-end"></i>
                        </a>
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