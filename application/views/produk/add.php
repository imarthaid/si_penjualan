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
                                        <form action="<?= base_url('produk/tambah'); ?>" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="kode">Kode Produk</label>
                                                    <input type="text" class="form-control" id="kode" name="kode" value="<?= $kode_produk; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="nama">Nama Produk</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Kategori</label>
                                                    <select name="id_kategori" class="js-example-basic-single w-100" style="height: 150px !important;">
                                                        <?php foreach ($kategori as $ktr) : ?>
                                                            <option value="<?= $ktr['id']; ?>"><?= $ktr['nama']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="stok">Stok Awal</label>
                                                    <input type="text" class="form-control" id="stok" name="stok" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="modal">Modal</label>
                                                    <input type="text" class="form-control" id="modal" name="modal">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="jual">Harga Jual</label>
                                                    <input type="text" class="form-control" id="jual" name="jual" autofocus>
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