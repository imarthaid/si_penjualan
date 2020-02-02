<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row" style="min-height: 600px !important;">
                <div class="col-sm-12 flex-column d-flex stretch-card">
                    <div class="row">
                        <div class="col-sm-12 grid-margin d-flex stretch-card">
                            <div class="container">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="<?= base_url('produk/ubah'); ?>" method="post">
                                            <input type="hidden" name="id" value="<?= $produkId['id']; ?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="kode">Kode Produk</label>
                                                    <input type="text" class="form-control" id="kode" name="kode" value="<?= $kode_produk; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Nama Produk</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $produkId['nama']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Kategori</label>
                                                    <select name="id_kategori" class="js-example-basic-single" style="width: 100%;">
                                                        <?php foreach ($kategori as $ktr) : ?>
                                                            <?php if ($ktr['nama'] == $produkId['nama_kategori']) : ?>
                                                                <option value="<?= $ktr['id']; ?>" selected><?= $ktr['nama']; ?></option>
                                                            <?php else : ?>
                                                                <option value="<?= $ktr['id']; ?>"><?= $ktr['nama']; ?></option>
                                                            <?php endif; ?>

                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="stok">Stok Awal</label>
                                                    <input type="text" class="form-control" id="stok" name="stok" value="<?= $produkId['stok']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="modal">Modal</label>
                                                    <input type="text" class="form-control" id="modal" name="modal" value="<?= $produkId['modal']; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="jual">Harga Jual</label>
                                                    <input type="text" class="form-control" id="jual" name="jual" value="<?= $produkId['jual']; ?>">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info float-right ml-3">Simpan</button>
                                            <a href="<?= base_url('produk'); ?>" type="submit" class="btn btn-secondary float-right">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>