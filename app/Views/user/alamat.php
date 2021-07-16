<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah ALamat</h1>
    <?php if ($alamat) { ?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">ALAMAT KAMU SUDAH ADA</h4>
            <p>anda telah menambahkan alamat</p>
            <hr>
            <a href="/profile" class="btn btn-primary">UBAH ALAMAT</a>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Tambah Alamat</h2>
                <form action="/User/alamatSave/" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="username" value="<?= user()->username; ?>">


                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Kota</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kota" name="kota">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgldatang" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah Alamat</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>

</div>
<?= $this->endSection(); ?>