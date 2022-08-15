    <div class="login-form-bg h-100 mt-5"  style="background-image: url('assets/images/footer-bg.png'); min-height:570px;">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                <?= $this->session->flashdata('message'); ?>
                <?= $this->session->unmark_flash('message'); ?>
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href=""> <img style="width:250px;" src="<?= base_url('assets/images/patra.png'); ?>"></a>
                                <form method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>" name="email">
                                        <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>