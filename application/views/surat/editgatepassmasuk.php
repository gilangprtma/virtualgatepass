<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('admin/listgatepassmasuk'); ?>">Gate Pass Masuk</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('admin/editgatepassmasuk/' . $ms['id']); ?>">Edit Gate Pass Masuk</a></li>
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
                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="col-lg-12">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h4>EDIT GATE PASS MASUK</h4>
                                            <img style="width:150px;" float="right;" src="<?= base_url('assets/images/patra.png'); ?>">
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th style="width: 200px;">Gate Pass Nomor</th>
                                                        <th style="width: 45px;">:</th>
                                                        <th><input type="text" class="form-control" name="no_gatepass" value="<?= $ms['no_gatepass']; ?>" disabled></th>
                                                        <th><input type="text" class="form-control" name="tanggal_permohonan" value="<?= date_indo($ms['tanggal_permohonan']); ?>"></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px;">Dasar</th>
                                                        <th style="width: 45px;">:</th>
                                                        <th><input type="text" class="form-control" name="dasar_pengiriman" value="<?= $ms['dasar_pengiriman']; ?>"></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px;">Pekerjaan</th>
                                                        <th style="width: 45px;">:</th>
                                                        <th><input type="text" class="form-control" name="pekerjaan" value="<?= $ms['pekerjaan']; ?>"></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px;">Dari</th>
                                                        <th style="width: 45px;">:</th>
                                                        <th><input type="text" class="form-control" name="dari" value="<?= $ms['dari']; ?>"></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px;">Untuk dikirim ke</th>
                                                        <th style="width: 45px;">:</th>
                                                        <th><input type="text" class="form-control" name="kepada" value="<?= $ms['kepada']; ?>" disabled></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px;">Atas tanggungan</th>
                                                        <th style="width: 45px;">:</th>
                                                        <th><input type="text" class="form-control" name="dari" value="<?= $ms['dari']; ?>"></th>
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
                                                    <tr>
                                                        <td>1</td>
                                                        <td><input type="text" class="form-control" name="jumlah" value="<?= $ms['jumlah']; ?>"></td>
                                                        <td><input type="text" class="form-control" name="unit" value="<?= $ms['unit']; ?>"></td>
                                                        <td><input type="text" class="form-control" name="nama_barang" value="<?= $ms['nama_barang']; ?>"></td>
                                                        <td><?= $ms['foto'];?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="card-body">
                                    <button type="submit" class="btn mb-1 btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>