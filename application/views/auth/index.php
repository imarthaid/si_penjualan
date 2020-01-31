<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="main-panel">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-5 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo text-center">
                                <h4>Login</h4>
                                <h1 class="mb-3 h2"><?= $label; ?></h1>
                            </div>
                            <?php if ($this->session->flashdata('pesan')) : ?>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Akun <strong>berhasil </strong><?= $this->session->flashdata('pesan'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($this->session->flashdata('gagal')) : ?>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Akun <strong>belum </strong><?= $this->session->flashdata('gagal'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($this->session->flashdata('password_gagal')) : ?>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <?= $this->session->flashdata('password_gagal'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <form action="<?= base_url('auth'); ?>" method="post" class="pt-2">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                    <small class="text-danger"><?= form_error('email'); ?></small>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password">
                                    <small class="text-danger"><?= form_error('password'); ?></small>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    <a href="#" class="auth-link text-black text-decoration-none d-block mb-3">Forgot password?</a>
                                    Don't have an account? <a href="<?= base_url('auth/regist'); ?>" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>