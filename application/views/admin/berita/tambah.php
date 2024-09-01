<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Berita</h1> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="<?= base_url("admin/berita") ?>">Berita</a></li>
            <li class="breadcrumb-item active">Tambah berita</li>

        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <form action="<?= base_url("admin/berita/tambah") ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul berita</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Judul berita" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Isi berita</label>
                    <textarea name="body" class="form-control" id="body" rows="10" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input name="image" type="file" class="form-control" id="image" required></input>
                </div>
                <button class="btn btn-success float-end" type="submit"><i class="fa-solid fa-share-from-square me-2"></i>Posting Berita</button>
                <button class="btn btn-warning float-end me-3" type="reset"><i class="fa-solid fa-arrows-rotate me-2"></i>Reset</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->