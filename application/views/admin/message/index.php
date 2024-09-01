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
            <li class="breadcrumb-item active"><i class="fa-regular fa-message me-3"></i>Pesan</li>

        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped  table-hover" id="pesan">
                <thead>
                    <tr>
                        <!-- <th scope="col">#</th> -->
                        <!-- <th scope="col"></th> -->
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Email Pengirim</th>
                        <th scope="col">Perihal</th>
                        <th scope="col">Pesan</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($messages as $message) {
                    ?>
                        <tr>
                            <td><?= $message->name ?></td>
                            <td><?= $message->email ?></td>
                            <td><?= $message->perihal ?></td>
                            <td><?= substr($message->tulis_pesan, 0, 50)  ?> ...</td>
                            <td>
                                <a href="<?= base_url("admin/message/detail/") . $message->id ?>" class="btn btn-info btn-sm">Detail</a>
                                <a href="<?= base_url("admin/message/hapus/") . $message->id ?>" class="btn btn-danger btn-sm">Hapus</a>
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
        $('#pesan').DataTable();
    });
</script>