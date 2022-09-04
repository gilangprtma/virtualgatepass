<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin');?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('admin/detailgatepassmasuk');?>">Gate Pass Masuk</a></li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Gate Pass Masuk</h4>
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->unmark_flash('message'); ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>No Gate Pass</th>
                                        <th>Dari</th>
                                        <th>Pekerjaan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listmasuk as $m) :?>
                                        <tr>
                                            <td><?= date_indo($m['tanggal_permohonan']); ?></td>
                                            <td><?= $m['no_gatepass'];?></td>
                                            <td><?= $m['dari'];?></td>
                                            <td><?= $m['pekerjaan'];?></td>
                                            <td>
                                                <?php 
                                                    if($m['status']=='0'){?>
                                                        <span class="text-primary">Belum Approve HSSE</span>
                                                    <?php
                                                    }elseif($m['status']=='1'){?>
                                                        <span class="text-primary">Approve HSSE</span>
                                                    <?php
                                                    }elseif($m['status']=='2'){?>
                                                        <span class="text-primary">Approve MPS</span>
                                                    <?php
                                                    }else{?>
                                                        <span class="text-success">Approve FTM</span>
                                                    <?php
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin/detailgatepassmasuk/'.$m['id']);?>" class="text-warning">Detail</a> 
                                                <?php 
                                                    if($user['role_id']==1){?>
                                                        |<a href="<?= base_url('cetak/index/'.$m['id']);?>" class="text-success">Print</a>
                                                    <?php }else {
                                                        
                                                    }
                                                ?> 
                                                
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>