<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Server Orderan</h1>


    <div class="container">
        <div class="row">
            <?php foreach ($desh as $ds) : ?>
                <div class="col-mb-4 m-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Username : <?= $ds['username']; ?></h5>
                            <h5 class="card-title">Item : <?= $ds['item']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Jenis : <?= $ds['type']; ?></h6>
                            <h6 class="card-subtitle mb-2 text-muted">Harga : <?= $ds['harga']; ?></h6>
                            <p class="card-text">Jumlah : <?= $ds['jumlah']; ?></p>
                            <a href="/pedagang/order/<?= $ds['id']; ?>" class="btn btn-danger">Terima Orderan</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</div>


<?= $this->endSection(); ?>