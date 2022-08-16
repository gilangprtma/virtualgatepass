<div class="container">
    <a href="<?= base_url('welcome'); ?>">
        <img src="<?= base_url('assets/images/patra.png'); ?>" alt="" class="img-fluid" style="width: 200px;">
    </a>
    
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="appoinment-wrap mt-5 mt-lg-0">
                <h2 class="mb-2 title-color text-center" style="font-size: 2rem; font-family: Poppins, sans-serif; color:black;">GATE PASS MASUK</h2>
                <p class="mb-4 text-center" style="font-family: Poppins, sans-serif; color:black;">Silahkan isi data berikut untuk kelengkapan pengantar surat Gate Pass <a href="<?= base_url('surat'); ?>">Masuk</a> / <a href="<?= base_url('surat/gatepasskeluar'); ?>">Keluar</a> :</p>
                <form id="#" class="appoinment-form" method="post" action="#">

                    <div class="card-body" style="font-family: Poppins, sans-serif; color:black;">
                        <div class="form-group">
                            <label for="inputPassword5">Nama</label>
                            <input type="text" id="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Email</label>
                            <input type="text" id="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Tanggal Permohonan</label>
                            <input type="date" id="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Dari</label>
                            <input type="text" id="nama" class="form-control" aria-describedby="passwordHelpBlock">
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
                            <input type="text" id="kepada" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Pekerjaan</label>
                            <input type="text" id="kepada" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Lampiran Surat</label>
                            <input type="file" id="kepada" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Nama Barang</label>
                            <input type="text" id="kepada" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Unit</label>
                            <input type="text" id="kepada" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Jumlah</label>
                            <input type="text" id="kepada" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Keterangan</label>
                            <input type="text" id="kepada" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword5">Foto Barang</label>
                            <input type="file" id="kepada" class="form-control">
                        </div>
                    </div>

                    <a class="btn btn-main btn-round-full mb-3" href="appoinment.html">Simpan </a>
                </form>
            </div>
        </div>
    </div>
</div>