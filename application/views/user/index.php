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
                        <?= $this->session->flashdata('message'); ?>
                        <?= $this->session->unmark_flash('message'); ?>
                        <h4 class="card-title">User</h4>
                        <a href="user/adduser" class="btn btn-primary">Tambah User</a><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
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
                                                    }elseif($m['role_id']=='4'){?>
                                                        <span class="text-primary">FTM</span>
                                                    <?php
                                                    }elseif($m['role_id']=='5'){?>
                                                        <span class="text-primary">Pjs MPS</span>
                                                    <?php
                                                    }elseif($m['role_id']=='6'){?>
                                                        <span class="text-primary">Pjs HSSE</span>
                                                    <?php
                                                    }else{?>
                                                        <span class="text-primary">Pjs FTM</span>
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
                                                <a href="<?= base_url('user/edituser/'.$m['id']);?>" class="text-warning">Edit</a> 
                                                
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