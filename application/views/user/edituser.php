<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin');?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('user');?>">User</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('user/edituser');?>">Ubah User</a></li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubah User</h4>
                        <div class="basic-form">
                            <form method="POST" action="">
                                <div class="form-row">
                                    <input type="hidden" name="id" value="<?= $us['id']; ?>">
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="name" value="<?= $us['name']; ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telepon</label>
                                        <input type="text" class="form-control" name="phone" value="<?= $us['phone']; ?>">
                                        <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="<?= $us['email']; ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Role</label>
                                        <select name="role_id" id="role" class="form-control">
                                            <?php foreach ($role as $r) : ?>
                                                <?php if ($r == $us['role_id']) : ?>
                                                    <option value="<?= $r; ?>" selected><?= $r; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $r; ?>"><?= $r; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    
                                </div>
                                <button type="submit" class="btn btn-success">Ubah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>