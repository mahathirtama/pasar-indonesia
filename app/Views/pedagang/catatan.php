<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="row">
        <div class="col">
            <h1 class="mt-2">Riwayat Orderan</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Item</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Type</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tgl datang</th>
                        <th scope="col">Pemesanan</th>
                        <th scope="col">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (4 * ($iniPage - 1)); ?>
                    <?php foreach ($pedagang as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $s['username']; ?></td>
                            <td><?= $s['item']; ?></td>
                            <td><?= $s['jumlah']; ?></td>
                            <td><?= $s['type']; ?></td>
                            <td><?= $s['harga']; ?></td>
                            <td><?= $s['tgldatang']; ?></td>
                            <td><?= $s['pembelian']; ?></td>
                            <td><?= $s['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('beli', 'catatan_pagination'); ?>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>