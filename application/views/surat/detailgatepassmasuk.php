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
                                                    <th><?= $ms['no_gatepass']; ?></th>
                                                    <th><?= date_indo($ms['tanggal_permohonan']); ?></th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 200px;">Dasar</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th><?= $ms['dasar_pengiriman']; ?></th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 200px;">Pekerjaan</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th><?= $ms['pekerjaan']; ?></th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 200px;">Dari</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th><?= $ms['dari']; ?></th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 200px;">Untuk dikirim ke</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th><?= $ms['kepada']; ?></th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 200px;">Atas tanggungan</th>
                                                    <th style="width: 45px;">:</th>
                                                    <th><?= $ms['dari']; ?></th>
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
                                                    <th>Foto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($ms['barang'] as $i => $barang) : ?>
                                                    <tr>
                                                        <td><?php echo $i + 1 ?></td>
                                                        <td><?= $barang['jumlah']; ?></td>
                                                        <td><?= $barang['unit']; ?></td>
                                                        <td><?= $barang['nama']; ?></td>
                                                        <td>
                                                            <img src="<?= $barang['foto']; ?>" alt="<?= $barang['nama']; ?>" class="img-thumbnail" style="width:100px">
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <?php
                            if ($ms['status'] == 0 & $user['role_id'] == 2) { ?>
                                <div class="card-body">
                                    <a href="<?= base_url('admin/approvemasukhsse/' . $ms['id']); ?>" class="btn btn-primary">Setujui</a>
                                </div>
                            <?php } elseif ($ms['status'] == 1 & $user['role_id'] == 1) { ?>
                                <div class="card-body">
                                    <a href="<?= base_url('admin/approvemasukmps/' . $ms['id']); ?>" class="btn btn-primary">Setujui</a>
                                </div>
                            <?php
                            } else { ?>
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