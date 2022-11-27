<!-- Slider Start -->
<section class="banner">
    <div class="container">
        <a href="<?= base_url('welcome'); ?>">
            <img src="<?= base_url('assets/images/patra.png'); ?>" alt="" class="img-fluid" style="width: 200px;">
        </a>

        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 large-phase">
                <h2 class="mb-3 mt-3" style="font-size: 2rem; font-family: Poppins, sans-serif;">Selamat datang di Virtual Gate Pass</h2>
                <h3 class="mb-3 mt-0" style="font-size: 2rem; font-family: Poppins, sans-serif;">Fuel Terminal Lomanis</h3>

                <p class="mb-4 pr-5" style="font-family: Poppins, sans-serif; color:black;">Silahkan mengisi <strong>SURAT IZIN MEMBAWA MASUK / KELUAR BARANG MATERIAL / ASSET </strong>melalui link dibawah ini :</p>
                <div class="btn-container ">
                    <a href="<?= base_url('surat'); ?>" class="btn btn-primary ml-lg-3 primary-shadow">Buat Surat <i class="icofont-simple-right ml-2  "></i></a>
                </div>

                <p class=" mt-4 mb-9 pr-5" style="font-family: Poppins, sans-serif; color:black;">Atau ingin melihat status surat anda :</p>
                <div class="btn-container ">
                    <a href="#" target="_blank" class="btn btn-primary ml-lg-3 primary-shadow" data-toggle="modal" data-target=".bd-example-modal-lg">Tracking Surat <i class="icofont-simple-right ml-2"></i></a>
                </div>
            </div>

            <!-- LOGIN -->
            <div class="col-lg-5 col-md-5 col-sm-12">
                <form method="POST" class="form row" id="login-form" action="<?= base_url('auth'); ?>">
                    <div class="col-lg-11 col-md-11 col-sm-12">
                        <h2 class="mb-3 mt-3" style="font-size: 2rem; font-family: Poppins, sans-serif;">LOGIN</h2>
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->unmark_flash('message'); ?>
                        <p class="text-body sub-main large-phase">Silahkan login untuk melakukan Approval / Rejection Gate Pass Masuk atau Keluar</p>
                    </div>

                    <div class="form-group input col-lg-11 col-md-11 col-sm-12 with-footman">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>" name="email">
                        </div>
                        <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>

                    <div class="form-group input col-lg-11 col-md-11 col-sm-12">
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">

                        </div>
                        <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>

                    <div class="col-lg-11 col-md-11 col-sm-12 mb-3">
                        <button type="submit" id="login-submit" class="btn btn-success login">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- MODAL -->
<div class="modal fade bd-example-modal-lg" id="box-surat-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mb-1 mt-1" style="font-size: 1rem; font-family: Poppins, sans-serif;" id="myLargeModalLabel">Tracking Surat</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-search" action="<?php echo base_url('/surat/get_by_no') ?>">
                    <div class="form-group input col-lg-11 col-md-11 col-sm-12 with-footman">
                        <label class="label-form" style="color:black;">Masukan Nomor Surat Anda </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="tracking" id="tracking">
                        </div>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>

                <div class="container" id="loading-view">
                    <div class="row text-center justify-content-center">
                        <div class="col-md-10">
                            <p class="text-muted">Loading...</p>
                        </div>
                    </div>
                </div>

                <div class="container" id="not-found-view">
                    <div class="row text-center justify-content-center">
                        <div class="col-md-10">
                            <h3 class="font-weight-bold">Data Tidak Ditemukan</h3>
                            <p class="text-muted">Surat dengan nomor tersebut tidak ditemukan</p>
                        </div>
                    </div>
                </div>

                <div class="container" id="data-view">
                    <div class="row text-center justify-content-center mb-5">
                        <div class="col-xl-6 col-lg-8">
                            <h3 class="font-weight-bold">Status Surat Anda</h3>
                            <p class="text-muted">Berikut Status Surat Gate Pass Anda</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up" id="timeline-data">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>