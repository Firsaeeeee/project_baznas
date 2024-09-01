<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Berita</h1> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="<?= base_url("admin/berita") ?>">Berita</a></li>
            <li class="breadcrumb-item active">Ubah berita</li>

        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <form action="<?= base_url("admin/berita/ubah/") . $berita['id']  ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul berita</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Judul berita" required value="<?= $berita['title'] ?>">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Isi berita</label>
                    <textarea name="body" class="form-control" id="body" rows="10" required><?= $berita['body'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input name="image" type="file" class="form-control" id="image"></input>
                </div>
                <input type="text" name="image_old" id="" value="<?= $berita['image'] ?>" hidden>
                <button class="btn btn-success float-end" type="submit"><i class="fa-solid fa-floppy-disk me-2"></i></i>Simpan Perubahan</button>
                <a href="<?= base_url("admin/berita/lihat/") . $berita['id'] ?>" class="btn btn-secondary float-end me-3" type="reset"><i class="fa-solid fa-rotate-left me-2"></i></i>Kembali</a>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->