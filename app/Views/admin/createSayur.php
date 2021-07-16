<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Sayur</h1>

    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Sayur</h2>
            <form action="/Sayur/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgldatang" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="type" name="type" value="<?= user()->username; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= old('harga'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgldatang" class="col-sm-2 col-form-label">Tgldatang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tgldatang" name="tgldatang" value="<?= old('tgldatang'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/default.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()" />
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label class="custom-file-label" for="gambar">Pilih Gambar...</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>