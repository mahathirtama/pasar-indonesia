<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Order</h1>
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"><?= user()->username; ?></h2>
            <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <p class="form-control" id="type" name="type"><?= $terima['type']; ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <p class="form-control" id="item" name="item"><?= $terima['item']; ?></p>
                </div>
            </div>
            <div class="row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <p class="form-control" id="harga" name="harga"><?= $terima['harga']; ?></p>
                </div>
            </div>
            <div class="row">
                <label for="tgldatang" class="col-sm-2 col-form-label">Tgldatang</label>
                <div class="col-sm-10">
                    <p type="text" class="form-control" id="tgldatang" name="tgldatang"><?= $terima['tgldatang']; ?></p>
                </div>
            </div>

            <form action="/pedagang/save/<?= $terima['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="type" value="<?= $terima['type']; ?>">
                <input type="hidden" name="item" value="<?= $terima['item']; ?>">
                <input type="hidden" name="harga" value="<?= $terima['harga']; ?>">
                <input type="hidden" name="tgldatang" value="<?= $terima['tgldatang']; ?>">
                <input type="hidden" name="username" value="<?= user()->username; ?>">
                <input type="hidden" name="pasar" value="<?= $terima['pasar']; ?>">
                <input type="hidden" name="jumlah" value="<?= $terima['jumlah']; ?>">
                <input type="hidden" name="pembelian" value="<?= $terima['pembelian']; ?>">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-danger">TERIMA</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>