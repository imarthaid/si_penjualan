<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="main-panel">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-5 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo text-center">
                                <h4>Registration</h4>
                                <h1 class="mb-3 h2"><?= $label; ?></h1>
                            </div>
                            <form class="pt-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Refeat Password">
                                </div>
                                <div class="mt-3">
                                    <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="<?= base_url('auth'); ?>" class="text-primary">Login</a>
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