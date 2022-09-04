<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin');?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('user/index');?>">User</a></li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User</h4>
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->unmark_flash('message'); ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listuser as $m) :?>
                                        <tr>
                                            <td><?= $m['name']; ?></td>
                                            <td><?= $m['email'];?></td>
                                            <td><?= $m['phone'];?></td>
                                            <td>
                                                <?php 
                                                    if($m['role_id']=='1'){?>
                                                        <span class="text-primary">Admin</span>
                                                    <?php
                                                    }elseif($m['role_id']=='2'){?>
                                                        <span class="text-primary">HSSE</span>
                                                    <?php
                                                    }elseif($m['role_id']=='3'){?>
                                                        <span class="text-primary">MPS</span>
                                                    <?php
                                                    }else{?>
                                                        <span class="text-primary">FTM</span>
                                                    <?php
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    if($m['is_active']=='1'){?>
                                                        <span class="text-primary">Aktif</span>
                                                    <?php
                                                    }else{?>
                                                        <span class="text-primary">Tidak Aktif</span>
                                                    <?php
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('user/adduser/'.$m['id']);?>" class="text-warning">Edit</a> 
                                                
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