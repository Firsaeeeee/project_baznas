<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Berita</h1> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="<?= base_url("admin/berita") ?>">Berita</a></li>
            <li class="breadcrumb-item active">Detail Berita</li>

        </ol>
    </nav>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="mb-0"><?= $berita["title"] ?></h3>
                    <p>Penulis : <?= $berita["author"] ?></p>

                    <figure class="figure">
                        <img src="<?= base_url("assets/upload/berita/") . $berita["image"] ?>" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption text-justify"><?= $berita["body"] ?></figcaption>
                    </figure>
                    <p></p>
                    <p>Tanggal Posting : <?= $berita["created_at"] ?></p>

                    <a href="<?= base_url("admin/berita/ubah/") . $berita["id"] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square me-2"></i>Ubah</a>

                    <!-- Tombol hapus berita -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#HapusBerita">
                        <i class="fa-solid fa-trash me-2"></i>Hapus Berita
                    </button>


                </div>
            </div>

        </div>
        <div class="col-md-6">
            <!-- <a href="" class="btn btn-warning">Ubah</a>
            <a href="" class="btn btn-danger">Hapus</a> -->
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->