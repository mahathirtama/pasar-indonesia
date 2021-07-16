<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Sayur</h1>

    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Sayur</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/sayur/<?= $sayur['gambar']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Item : <?= $sayur['nama']; ?></h5>
                            <p class="card-text">Type <?= $sayur['type']; ?></p>
                            <p class="card-text"><b></b>Rp.<?= $sayur['harga']; ?>-,</b></p>
                            <p class="card-text">Di Datangkan Pada <?= $sayur['tgldatang']; ?></p>
                            <a href="/Sayur/editSayur/<?= $sayur['slug']; ?>" class="btn btn-warning">Edit</a>
                            <form action="/admin/sayur/delete/<?= $sayur['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                            </form>

                            <br><br>
                            <a href="/admin/sayur">Kembali ke daftar Sayur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>