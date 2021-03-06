<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row" style="min-height: 600px !important;">
                <div class="col-sm-12 flex-column d-flex stretch-card">
                    <div class="row">
                        <div class="col-sm-12 grid-margin d-flex stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <a href="<?= base_url('produk/add'); ?>" class="btn btn-info ml-auto mb-3 text-white float-right"><i class="mdi mdi-folder-plus mr-2"></i>Tambah Produk</a>
                                    <table class="table hover display" id="myTable">
                                        <thead class="table-primary text-dark font-weight-bold">
                                            <tr>
                                                <th scope="col" style="width: 50px">No</th>
                                                <th scope="col">Kode</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Modal</th>
                                                <th scope="col" class="text-left">Harga Jual</th>
                                                <th scope="col" class="text-center" style="width: 150px">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($produk as $prd) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?= $prd['kode']; ?></td>
                                                    <td><?= $prd['nama']; ?></td>
                                                    <td><?= $prd['nama_kategori']; ?></td>
                                                    <td><?= $prd['modal']; ?></td>
                                                    <td><?= $prd['jual']; ?></td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('produk/edit/'); ?><?= $prd['id']; ?>" class="btn btn-success py-1 px-2 text-white">Edit</a>
                                                        <a href="<?= base_url('produk/hapus/'); ?><?= $prd['id']; ?>" class="btn btn-danger py-1 px-2">Hapus</a>
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