<?= $this->extend('layout/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <?php if ($alamat) { ?>
        <?php foreach ($alamat as $s) : ?>
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Membeli Sayur</h1>
            <div class="row">
                <div class="col-8">
                    <h2 class="my-3"><?= user()->username; ?></h2>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <p class="form-control" id="type" name="type"><?= $s['alamat']; ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <p class="form-control" id="type" name="type"><?= $sayur['type']; ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <p class="form-control" id="nama" name="nama"><?= $sayur['nama']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <p class="form-control" id="harga" name="harga"><?= $sayur['harga']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="d" class="col-sm-2 col-form-label">Tgldatang</label>
                        <div class="col-sm-10">
                            <p type="text" class="form-control" id="tgldatang" name="tgldatang"><?= $sayur['tgldatang']; ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gambar" class="col-sm-2 col-form-label">gambar</label>
                        <div class="col-sm-2">
                            <img src="/img/sayur/<?= $sayur['gambar']; ?>" class="img-thumbnail img-preview">
                        </div>
                    </div>
                    <form action="/Beli/save/<?= $sayur['id']; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="type" value="<?= $sayur['type']; ?>">
                        <input type="hidden" name="item" value="<?= $sayur['nama']; ?>">
                        <input type="hidden" name="harga" value="<?= $sayur['harga']; ?>">
                        <input type="hidden" name="tgldatang" value="<?= $sayur['tgldatang']; ?>">
                        <input type="hidden" name="alamat" value="<?= $s['alamat']; ?>">
                        <input type="hidden" name="username" value="<?= user()->username; ?>">

                        <div class="form-group row">
                            <label for="pasar" class="col-sm-2 col-form-label">Type Pasar</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="pasar" name="pasar">
                                    <option selected>Pasar Minggu</option>
                                    <option value="Pasar Cisalak">Pasar Cisalak</option>
                                    <option value="Pasar Pal">Pasar Pal</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="jumlah" name="jumlah">
                                    <option selected>1KG</option>
                                    <option value="1Kg">1Kg</option>
                                    <option value="2Kg">2Kg</option>
                                    <option value="3Kg">3Kg</option>
                                    <option value="4Kg">4Kg</option>
                                    <option value="5Kg">5Kg</option>
                                    <option value="6Kg">6Kg</option>
                                    <option value="7Kg">7Kg</option>
                                    <option value="8Kg">8Kg</option>
                                    <option value="9Kg">9Kg</option>
                                    <option value="10Kg">10KG</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pembelian" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="pembelian" name="pembelian">
                                    <option selected>Alfamart</option>
                                    <option value="Indomaret">Indomaret</option>
                                    <option value="Gopay">Gopay</option>
                                    <option value="Link Aja">Link Aja</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BRI">BRI</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">BELI</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">ALAMAT KAMU BELUM ADA</h4>
            <p>Masukan alamat terlebih dahulu</p>
            <hr>
            <a href="/alamat" class="btn btn-primary">Masukan ALAMAT</a>
        </div>
    <?php } ?>
</div>
<?= $this->endSection(); ?>