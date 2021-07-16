<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Daging</h1>

    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Daging</h1>
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
                    <?php foreach ($daging as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/daging/<?= $d['gambar']; ?>" alt="" class="gambar"></td>
                            <td><?= $d['nama']; ?></td>
                            <td><?= $d['type']; ?></td>
                            <td><?= $d['harga']; ?></td>
                            <td><?= $d['tgldatang']; ?></td>
                            <td>
                                <a href="/admin/daging/<?= $d['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>