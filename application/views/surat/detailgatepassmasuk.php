<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('admin/listgatepassmasuk'); ?>">Gate Pass Masuk</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('admin/detailgatepassmasuk'); ?>">Detail Gate Pass Masuk</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <!-- End Row -->
        <div class="row">
            <div class="col-12 m-b-30">
                <div class="row m-b-30">
                    <div class="col-lg-12">
                        <div class="card border-primary">
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
                                                    <th style="width: 200px;">Gate Pass Nomor</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th>730/GP/Q24046/VII/2022</th>
                                                    <th><?= date_indo($ms['tanggal_permohonan']); ?></th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 200px;">Dasar</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th><?= $ms['dasar_pengiriman'];?></th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 200px;">Pekerjaan</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th><?= $ms['pekerjaan'];?></th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 200px;">Dari</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th><?= $ms['dari'];?></th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 200px;">Untuk dikirim ke</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th><?= $ms['kepada'];?></th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 200px;">Atas tanggungan</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th><?= $ms['dari'];?></th>
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
                                                    <th>No</th>
                                                    <th>Jumlah Barang</th>
                                                    <th>Unit</th>
                                                    <th>Nama Barang</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><?= $ms['jumlah'];?></td>
                                                    <td><?= $ms['unit'];?></td>
                                                    <td><?= $ms['nama_barang'];?></td>
                                                    <td><?= $ms['keterangan'];?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="col-lg-12">
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
                            </div>-->
                            <?php 
                            if($ms['status']=='1'){?>
                                <div class="card-body">
                                    <a href="<?= base_url('admin/approvemasukmps/'.$ms['id']);?>" class="btn btn-primary">Setujui</a>
                                </div>
                            <?php }else{ ?>
                                <div class="card-body">
                                    <button type="button" class="btn mb-1 btn-primary" disabled="disabled">Setujui</button>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>