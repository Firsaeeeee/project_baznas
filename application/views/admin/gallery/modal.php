<!-- Modal Hapus-->
<div class="modal fade" id="HapusAlbum" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="HapusAlbumLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h1 class="modal-title fs-5" id="HapusAlbumLabel"><i class="fa-solid fa-triangle-exclamation me-2"></i>Pringatan!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anada yakin untuk mengahapus album ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    var deleteModal = document.getElementById('HapusAlbum')
    deleteModal.addEventListener('show.bs.modal', function(event) {
        // Tombol yang memicu modal
        var button = event.relatedTarget
        // Ambil data dari atribut data-whatever
        var recipient = button.getAttribute('data-whatever')

        // Cari elemen di dalam modal untuk diisi datanya
        var buttonDelete = deleteModal.querySelector('a')


        // Tambahkan data id kedalam link
        buttonDelete.setAttribute("href", "<?= base_url("admin/album/hapus/") ?>" + recipient)

    })
</script>