<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin');?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('user');?>">User</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('user/adduser');?>">Add User</a></li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah User</h4>
                        <div class="basic-form">
                            <form method="POST" action="<?= base_url('user/addUser'); ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama" name="name" value="<?= set_value('name'); ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telepon</label>
                                        <input type="text" class="form-control" placeholder="Telepon" name="phone" value="<?= set_value('phone'); ?>">
                                        <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="text" class="form-control" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Role</label>
                                        <select name="role_id" id="role" class="form-control">
                                            <option value="">Pilihan</option>
                                            <option value="3">MPS</option>
                                            <option value="5">Pjs MPS</option>
                                            <option value="2">HSSE</option>
                                            <option value="6">Pjs HSSE</option>
                                            <option value="4">FTM</option>
                                            <option value="7">Pjs FTM</option>
                                        </select>
                                        <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Password</label>
                                        <input id="password1" type="password" class="form-control pwstrength" placeholder="Password" data-indicator="pwindicator" name="password1">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control" placeholder="Password" name="password2">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>