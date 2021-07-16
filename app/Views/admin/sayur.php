<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Admin</h1>

    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Sayur</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Type</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tgl datang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($sayur as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/sayur/<?= $s['gambar']; ?>" alt="" class="gambar"></td>
                            <td><?= $s['nama']; ?></td>
                            <td><?= $s['type']; ?></td>
                            <td><?= $s['harga']; ?></td>
                            <td><?= $s['tgldatang']; ?></td>
                            <td>
                                <a href="/admin/sayur/<?= $s['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>