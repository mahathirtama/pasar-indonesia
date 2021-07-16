<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">MY PROFILE</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <?php foreach ($alamat as $s) : ?>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= user()->username; ?></td>
                            <td><?= user()->email; ?></td>
                            <td><?= $s['kota']; ?></td>
                            <td><?= $s['alamat']; ?></td>
                            <td><a href="/User/ubah/<?= $s['id']; ?>" class="btn btn-primary">UBAH ALAMAT</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>