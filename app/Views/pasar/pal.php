<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pasar Pal</h1>

    <div class="container">
        <div class="row">
            <?php foreach ($sayur as $yur) : ?>
                <div class="col-mb-4">
                    <div class="card m-4" style="width: 18rem;">
                        <img src="/img/sayur/<?= $yur['gambar']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Item : <?= $yur['nama']; ?></h5>
                            <p class="card-text">Type : <?= $yur['type']; ?></p>
                            <p class="card-text">Harga : <?= $yur['harga']; ?>,-</p>
                            <a href="/beli/sayur/<?= $yur['slug']; ?>" class="btn btn-primary">BELI</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ($daging as $ging) : ?>
                <div class="col-mb-4">
                    <div class="card m-4" style="width: 18rem;">
                        <img src="/img/daging/<?= $ging['gambar']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Item : <?= $ging['nama']; ?></h5>
                            <p class="card-text">Type : <?= $ging['type']; ?></p>
                            <p class="card-text">Harga : <?= $ging['harga']; ?>,-</p>
                            <a href="/beli/daging/<?= $ging['slug']; ?>" class="btn btn-primary">BELI</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ($buah as $ah) : ?>
                <div class="col-mb-4">
                    <div class="card m-4" style="width: 18rem;">
                        <img src="/img/buah/<?= $ah['gambar']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Item : <?= $ah['nama']; ?></h5>
                            <p class="card-text">Type : <?= $ah['type']; ?></p>
                            <p class="card-text">Harga : <?= $ah['harga']; ?>,-</p>
                            <a href="/beli/buah/<?= $ah['slug']; ?>" class="btn btn-primary">BELI</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>