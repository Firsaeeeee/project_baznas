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

            <li class="breadcrumb-item active"><a href="<?= base_url("admin/message") ?>">Pesan</a></li>
            <li class="breadcrumb-item active"><?= $message->name ?></li>

        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <p>
                Nama Pengirim : <?= $message->name ?>
            </p>
            <p>
                Email Pengirim : <?= $message->email ?>
            </p>
        </div>
        <div class="card-body">
            <p class="fw-bold">Pesan :</p>
            <p>
                <?= $message->tulis_pesan ?>
            </p>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->