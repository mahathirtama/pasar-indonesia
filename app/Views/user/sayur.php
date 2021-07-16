<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Sayur</h1>

    <div class="row">
        <div class="col">
            <h1>TYPE SAYUR</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($sayur as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/sayur/<?= $s['gambar']; ?>" alt="" class="gambar"></td>
                            <td><?= $s['nama']; ?></td>
                            <td>Rp.<?= $s['harga']; ?>-,</td>
                            <td>
                                <a href="/beli/sayur/<?= $s['slug']; ?>" class="btn btn-success">Beli</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>