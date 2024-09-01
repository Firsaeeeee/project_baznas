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
    <!-- <h1 class="h3 mb-4 text-gray-800">Slide Show</h1> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fa-solid fa-panorama me-2"></i>Slide Show</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-5">
            <form method="post" action="<?= base_url("admin/slide_show/upload") ?>" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input name="gambar" type="file" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">

        <?php
        // menampilkan data slide dengan perulangan
        foreach ($slides as $slide) {
        ?>
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <img src="<?= base_url('assets/upload/slide-show/') . $slide["nama_file"] ?>" alt="" class="img img-fluid">
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url("/admin/slide_show/delete/") . $slide["id"]  ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash me-2"></i>Hapus</a>
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