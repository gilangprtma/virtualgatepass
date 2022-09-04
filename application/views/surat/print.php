<div class="content-body">

    <!-- row -->

        <!-- End Row -->
        <div class="col-lg-12">
            <div class="card-body">
                <div class="card-title">
                    <h4>GATE PASS MASUK</h4>
                    <img style="width:150px;" float="right;" src="<?= base_url('assets/images/patra.png'); ?>">
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th style="width: 110px;">Gate Pass Nomor</th>
                                <th style="width: 15px;">:</th>
                                <th style="width: 260px;">730/GP/Q24046/VII/2022</th>
                                <th><?= date_indo($cetak['tanggal_permohonan']); ?></th>
                            </tr>
                            <tr>
                                <th style="width: 110px;">Dasar</th>
                                <th style="width: 15px;">:</th>
                                <th><?= $cetak['dasar_pengiriman'];?></th>
                            </tr>
                            <tr>
                                <th style="width: 110px;">Pekerjaan</th>
                                <th style="width: 15px;">:</th>
                                <th><?= $cetak['pekerjaan'];?></th>
                            </tr>
                            <tr>
                                <th style="width: 110px;">Dari</th>
                                <th style="width: 15px;">:</th>
                                <th><?= $cetak['dari'];?></th>
                            </tr>
                            <tr>
                                <th style="width: 110px;">Untuk dikirim ke</th>
                                <th style="width: 15px;">:</th>
                                <th><?= $cetak['kepada'];?></th>
                            </tr>
                            <tr>
                                <th style="width: 110px;">Atas tanggungan</th>
                                <th style="width: 15px;">:</th>
                                <th><?= $cetak['dari'];?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Jumlah Barang</th>
                                <th style="text-align: center;">Unit</th>
                                <th style="text-align: center;">Nama Barang</th>
                                <th style="text-align: center;">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"><?= $cetak['jumlah'];?></td>
                                <td style="text-align: center;"><?= $cetak['unit'];?></td>
                                <td style="text-align: center;"><?= $cetak['nama_barang'];?></td>
                                <td style="text-align: center;"><?= $cetak['keterangan'];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-lg-12">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Diketahui Oleh :</th>
                                <th style="text-align: center;">Yang Menerima :</th>
                                <th style="text-align: center;">Mengetahui :</th>
                                <th style="text-align: center;">Diserahkan Oleh :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="text-align: center;">Sr. Spv. HSSE</th>
                                <th style="text-align: center;">Sr. Spv. Maint. Plan. & Service</th>
                                <th style="text-align: center;">Fuel Terminal Manager</th>
                                <th style="text-align: center;">Analytical Balance</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">FT Lomanis</th>
                                <th style="text-align: center;">FT Lomanis</th>
                                <th style="text-align: center;">FT Lomanis</th>
                                <th style="text-align: center;">PT. Benisindo Pratama</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">Budi Yulianto</th>
                                <th style="text-align: center;">Ajik Putra K</th>
                                <th style="text-align: center;">Rahmad Febriadi</th>
                                <th style="text-align: center;">Miko</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center;" colspan="3">Diisi oleh bagian :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="text-align: center;" colspan="3">Ekspedisi / Gate Keeper</th>
                            </tr>
                            <tr>
                                <th>No. Urut</th>
                                <th>:</th>
                                <th>......</th>
                            </tr>
                            <tr>
                                <th>Diangkut tanggal</th>
                                <th>:</th>
                                <th>......</th>
                            </tr>
                            <tr>
                                <th>Nopol Kendaraan</th>
                                <th>:</th>
                                <th>......</th>
                            </tr>
                            <tr>
                                <th>Sopir</th>
                                <th>:</th>
                                <th>......</th>
                            </tr>
                            <tr>
                                <th>Jam</th>
                                <th>:</th>
                                <th>......</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                <!-- End Col -->
    <!-- #/ container -->
</div>