<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">Ubah Alamat</h1>
    <?php foreach ($alamat as $s) : ?>
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Ubah Data ALamat</h2>
                <form action="/User/updateAlamat/<?= $s['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="username" value="<?= $s['username']; ?>">
                    <div class="form-group row">
                        <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kota" name="kota" value="<?= (old('kota')) ? old('kota') : $s['kota']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $s['alamat']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>