<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row" style="min-height: 600px !important;">
                <div class="col-sm-4 flex-column d-flex stretch-card">
                    <div class="row " style="height: 200px !important;">
                        <div class="col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header bg-info text-dark pt-3">
                                        <h4>Tambah Kategori</h4>
                                    </div>
                                    <form class="mt-4" action="<?= base_url('kategori/tambah'); ?>" method="post">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-info" name="nama" id="nama" autofocus placeholder="Tambah Disini...">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <button type="submit" class="btn btn-inverse-info py-3" style="width: 100%">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
                                                        <button class="btn btn-success py-1 px-2 text-white btn-edit" data-toggle="modal" data-target="#editKategori" data-id="<?= $ktr['id']; ?>">Edit</button>
                                                        <a href="<?= base_url('kategori/hapus/'); ?><?= $ktr['id']; ?>" class="btn btn-danger py-1 px-2" onclick="return confirm('Delete?')">Hapus</a>
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

            <!-- Modal -->
            <div class="modal fade" id="editKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h4 class="modal-title text-dark" id="exampleModalCenterTitle">Edit Kategori</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="mt-4" action="<?= base_url('kategori/edit'); ?>" method="post">
                                <input type="hidden" name="id" id="id">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-info" name="nama" id="namaEdit" autofocus placeholder="Edit Disini...">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-inverse-info py-3" style="width: 100%">Edit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>