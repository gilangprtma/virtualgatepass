<div class="container">
    <a href="<?= base_url('welcome'); ?>">
        <img src="<?= base_url('assets/images/patra.png'); ?>" alt="" class="img-fluid" style="width: 200px;">
    </a>
    <?= $this->session->flashdata('message'); ?>
    <?= $this->session->unmark_flash('message'); ?>
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="appoinment-wrap mt-5 mt-lg-0">
                <h2 class="mb-2 title-color text-center" style="font-size: 2rem; font-family: Poppins, sans-serif; color:black;">GATE PASS MASUK</h2>
                <p class="mb-4 text-center" style="font-family: Poppins, sans-serif; color:black;">Silahkan isi data berikut untuk kelengkapan pengantar surat Gate Pass <a href="<?= base_url('surat'); ?>">Masuk</a> / <a href="<?= base_url('surat/gatepasskeluar'); ?>">Keluar</a> :</p>
                <?= form_open_multipart(''); ?>
                    <div class="card-body" style="font-family: Poppins, sans-serif; color:black;">
                        <div class="form-group">
                            <label for="inputPassword5">Nama</label>
                            <input type="text" id="nama" class="form-control" name="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Email</label>
                            <input type="text" id="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Tanggal Permohonan</label>
                            <input type="date" id="tanggal_permohonan" class="form-control" name="tanggal_permohonan" value="<?= set_value('tanggal_permohonan'); ?>">
                            <?= form_error('tanggal_permohonan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Dari</label>
                            <input type="text" id="dari" class="form-control" aria-describedby="passwordHelpBlock"  name="dari" value="<?= set_value('dari'); ?>">
                            <?= form_error('dari', '<small class="text-danger pl-3">', '</small>'); ?>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Contoh : PT. Sekar Mamba
                            </small>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Kepada</label>
                            <input type="text" id="kepada" class="form-control" placeholder="PT. Pertamina Patra Niaga FT Lomanis" disabled>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Dasar pengiriman barang material / asset</label>
                            <input type="text" id="dasar_pengiriman" class="form-control" name="dasar_pengiriman" value="<?= set_value('dasar_pengiriman'); ?>">
                            <?= form_error('dasar_pengiriman', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Pekerjaan</label>
                            <input type="text" id="pekerjaan" class="form-control" name="pekerjaan" value="<?= set_value('pekerjaan'); ?>">
                            <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Lampiran Surat</label>
                            <input type="file" id="kepada" class="form-control" name="upload">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Nama Barang</label>
                            <input type="text" id="nama_barang" class="form-control" name="nama_barang" value="<?= set_value('nama_barang'); ?>">
                            <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Unit</label>
                            <input type="text" id="unit" class="form-control" name="unit" value="<?= set_value('unit'); ?>">
                            <?= form_error('unit', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Jumlah</label>
                            <input type="text" id="jumlah" class="form-control" name="jumlah" value="<?= set_value('jumlah'); ?>">
                            <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Keterangan</label>
                            <input type="text" id="keterangan" class="form-control" name="keterangan" value="<?= set_value('keterangan'); ?>">
                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Foto Barang</label>
                            <input type="file" id="kepada" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-lg mb-5" style="background-image:linear-gradient(6deg, #17ffd3 0%, #23e3ee 100%) ;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>