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
                <form method="POST" class="form row" id="login-form" action="<?= base_url('welcome'); ?>">
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
                            <div class="input-group-append hideshowpass" onclick="hideshowpass(this)" key="pin">
                                <span class="input-group-text">
                                    <svg width="19" height="13" id="showSVG" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z" fill="#CCCCCC" />
                                    </svg>
                                    <svg width="19" height="13" id="hideSVG" style="display:none;" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z" fill="#CCCCCC" />
                                    </svg>
                                </span>
                            </div>
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
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mb-1 mt-1" style="font-size: 1rem; font-family: Poppins, sans-serif;" id="myLargeModalLabel">Tracking Surat</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="form-group input col-lg-11 col-md-11 col-sm-12 with-footman">
                        <label class="label-form" style="color:black;">Masukan Nomor Surat Anda </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="tracking" id="tracking">
                        </div>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mb-1 mt-1" style="font-size: 1rem; font-family: Poppins, sans-serif;" id="myLargeModalLabel">Tracking Surat</h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row text-center justify-content-center mb-5">
                        <div class="col-xl-6 col-lg-8">
                            <h3 class="font-weight-bold">Status Surat Anda</h3>
                            <p class="text-muted">Berikut Status Surat Gate Pass Anda</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                                <div class="timeline-step">
                                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                                        <div class="inner-circle"></div>
                                        <p class="h6 mt-3 mb-1">HSSE</p>
                                        <p class="h6 mb-0 mb-lg-0" style="color:chartreuse;">Approve</p>
                                        <p class="h6 mb-0 mb-lg-0">02 Sep 2022</p>
                                    </div>
                                </div>
                                <div class="timeline-step">
                                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                                        <div class="inner-circle"></div>
                                        <p class="h6 mt-3 mb-1">MPS</p>
                                        <p class="h6 mb-0 mb-lg-0" style="color:chartreuse;">Approve</p>
                                        <p class="h6 mb-0 mb-lg-0">02 Sep 2022</p>
                                    </div>
                                </div>
                                <div class="timeline-step">
                                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                                        <div class="inner-circle"></div>
                                        <p class="h6 mt-3 mb-1">FTM</p>
                                        <p class="h6 mb-0 mb-lg-0" style="color:chartreuse;">Approve</p>
                                        <p class="h6 mb-0 mb-lg-0">04 Sep 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>