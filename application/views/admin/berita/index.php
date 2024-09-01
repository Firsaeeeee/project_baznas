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
            <li class="breadcrumb-item active"><i class="fa-regular fa-newspaper me-2"></i>Berita</li>

        </ol>
    </nav>
    <div class="d-flex mb-3">
        <a href="<?= base_url("admin/berita/tambah") ?>" class="btn btn-success"><i class="fa-solid fa-square-plus me-2"></i>Tambah Berita</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped  table-hover" id="berita">
                <thead>
                    <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Tanggal</th>
                        <th scope="col">Judul Berita</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($berita as $b) {
                    ?>
                        <tr>
                            <!-- <td scope="row"><?= $i++ ?>.</td> -->
                            <td>
                                <?= $b['created_at'] ?>
                            </td>
                            <!-- <td style="min-height: 200px"><img src="<?= base_url("assets/upload/berita/") . $b['image'] ?>" alt="" class="img-thumbnail"></td> -->
                            <td><?= $b['title'] ?></td>

                            <td>
                                <!-- Tombol hapus berita -->
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#HapusBerita" data-whatever="<?= $b['id'] ?>">
                                    <i class="fa-solid fa-trash me-2"></i>Hapus
                                </button>


                                <a href="<?= base_url("admin/berita/lihat/") .  $b['id'] ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-circle-info me-2"></i>Detail</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<script>
    $(document).ready(function() {
        $('#berita').DataTable();
    });
</script>