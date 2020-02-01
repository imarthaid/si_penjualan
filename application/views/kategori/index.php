<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row" style="min-height: 600px !important;">
                <div class="col-sm-4 flex-column d-flex stretch-card">
                    <div class="row flex-grow">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="table-primary text-dark font-weight-bold">
                                            <tr>
                                                <th scope="col">Tambah Data Kategori</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <form class="mt-4" action="<?= base_url('kategori/tambah'); ?>" method="post">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-info" name="nama" id="nama" autofocus placeholder="Tambah Disini...">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <button type="submit" class="btn btn-inverse-primary py-3" style="width: 100%">Product </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 grid-margin stretch-card">

                        </div>
                    </div>
                </div>
                <div class="col-sm-8 flex-column d-flex stretch-card">
                    <div class="row">
                        <div class="col-sm-12 grid-margin d-flex stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table hover" id="myTable">
                                        <thead class="table-primary text-dark font-weight-bold">
                                            <tr>
                                                <th scope="col" style="width: 50px">No</th>
                                                <th scope="col">Nama Kategori Produk</th>
                                                <th scope="col" class="text-center" style="width: 150px">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($kategori as $ktr) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?= $ktr['nama']; ?></td>
                                                    <td class="text-center">
                                                        <button class="btn btn-success py-1 px-2">Edit</button>
                                                        <a href="<?= base_url('kategori/hapus/'); ?><?= $ktr['id']; ?>" class="btn btn-danger py-1 px-2">Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>