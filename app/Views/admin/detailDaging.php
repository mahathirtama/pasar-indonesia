<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Daging</h1>

    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Daging</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/daging/<?= $daging['gambar']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Item : <?= $daging['nama']; ?></h5>
                            <p class="card-text">Type <?= $daging['type']; ?></p>
                            <p class="card-text"><b></b>Rp.<?= $daging['harga']; ?>-,</b></p>
                            <p class="card-text">Di Datangkan Pada <?= $daging['tgldatang']; ?></p>
                            <a href="/Daging/editDaging/<?= $daging['slug']; ?>" class="btn btn-warning">Edit</a>
                            <form action="/admin/daging/delete/<?= $daging['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                            </form>

                            <br><br>
                            <a href="/admin/daging">Kembali ke daftar Daging</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>