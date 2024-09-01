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
            <li class="breadcrumb-item active">Tambah image</li>

        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url("admin/gallery/tambah") ?>" method="post" enctype="multipart/form-data">
                        <h2 class="text-center text-success fw-bold">Tambah Foto</h2>

                        <div class="input-group mb-3">
                            <select name="id_album" class="form-select " aria-label="Default select example">
                                <option value="">Pilih album</option>
                                <?php
                                foreach ($albums as $album) {
                                ?>
                                    <option value="<?= $album['id'] ?>"><?= $album['nama_album'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahAlbumModal">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>

                        <div class="input-group mb-3">
                            <input name="image" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <button class="btn btn-success float-end" type="submit">Simpan</button>

                    </form>
                </div>
            </div>

        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Button trigger modal -->


<!-- Modal -->

<div class="modal fade" id="tambahAlbumModal" tabindex="-1" aria-labelledby="tambahAlbumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('admin/album/tambah') ?>" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahAlbumModalLabel">Tambah Album</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Nama Album</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_album" class="form-control" id="inputPassword">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>