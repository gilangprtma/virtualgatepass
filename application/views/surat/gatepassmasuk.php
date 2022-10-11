<script src="<?= base_url('assets_user/bundles/izitoast/js/iziToast.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<div class="container">
    <a href="<?= base_url('welcome'); ?>">
        <img src="<?= base_url('assets/images/patra.png'); ?>" alt="" class="img-fluid" style="width: 200px;">
    </a>
    <?= $this->session->flashdata('message'); ?>
    <?= $this->session->unmark_flash('message'); ?>
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="appoinment-wrap mt-5 mt-lg-0">
                <h2 class="mb-2 title-color text-center" style="font-size: 2rem; font-family: Poppins, sans-serif; color:black;">GATE PASS MASUK</h2>
                <p class="mb-4 text-center" style="font-family: Poppins, sans-serif; color:black;">Silahkan isi data berikut untuk kelengkapan pengantar surat Gate Pass <a href="<?= base_url('surat'); ?>">Masuk</a> / <a href="<?= base_url('surat/gatepasskeluar'); ?>">Keluar</a> :</p>
                <form method="POST" action="" id="add_gatepassmasuk" enctype="multipart/form-data">
                    <div class="card-body" style="font-family: Poppins, sans-serif; color:black;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Nama</label>
                                    <input type="text" id="nama" class="form-control" name="nama" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="form-label">Email</label>
                                    <input type="text" id="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="form-label">Tanggal Permohonan</label>
                                    <input type="date" id="tanggal_permohonan" class="form-control" name="tanggal_permohonan" value="<?= set_value('tanggal_permohonan'); ?>">
                                    <?= form_error('tanggal_permohonan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="form-label">Dari</label>
                                    <input type="text" id="dari" class="form-control" aria-describedby="passwordHelpBlock" name="dari" value="<?= set_value('dari'); ?>">
                                    <?= form_error('dari', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Contoh : PT. Sekar Mamba
                                    </small>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="form-label">Kepada</label>
                                    <input type="text" id="kepada" class="form-control" placeholder="PT. Pertamina Patra Niaga FT Lomanis" name="kepada" disabled>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="form-label">Dasar pengiriman barang material / asset</label>
                                    <input type="text" id="dasar_pengiriman" class="form-control" name="dasar_pengiriman" value="<?= set_value('dasar_pengiriman'); ?>">
                                    <?= form_error('dasar_pengiriman', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="form-label">Lampiran Surat (Opsional)</label>
                                    <input type="file" id="lampiran" class="form-control" name="lampiran" value="<?= set_value('lampiran'); ?>">
                                    <?= form_error('lampiran', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="form-label">Pekerjaan</label>
                                    <input type="text" id="pekerjaan" class="form-control" name="pekerjaan" value="<?= set_value('pekerjaan'); ?>">
                                    <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <!--<div class="col-lg-12">
                            <label for="inputPassword5">Lampiran Surat</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="upload" accept=".pdf">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>-->

                            <div class="col-lg-3">
                                <label for="form-label">Nama Barang</label>
                                <div class="form-group">
                                    <input type="text" id="nama_barang" class="form-control">
                                    <?= form_error('nama_barang[]', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="form-label">Unit</label>
                                    <input type="text" id="unit" class="form-control">
                                    <?= form_error('unit[]', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="form-label">Jumlah</label>
                                    <input type="text" id="jumlah" class="form-control">
                                    <?= form_error('jumlah[]', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="form-label">Foto</label>
                                    <input type="file" id="foto" class="form-control">
                                    <?= form_error('foto[]', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <label></label>
                                <div class="buttons mt-2">
                                    <button class="btn btn-primary" type="button" id="add">
                                        <i class="icofont-ui-add"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3" id="container-table">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Barang</th>
                                                        <th>Unit</th>
                                                        <th>Jumlah</th>
                                                        <th>Foto</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="content-table">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="col-lg-12">
                            <div class="form-group">
                                <label for="inputPassword5">Keterangan</label>
                                <input type="text" id="keterangan" class="form-control" name="keterangan" value="<?= set_value('keterangan'); ?>">
                                <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>-->

                            <!--<div class="col-lg-12">
                                <label for="form-label">Foto Barang</label>
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="file" required>
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-lg mb-5" style="background-image:linear-gradient(6deg, #17ffd3 0%, #23e3ee 100%) ;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JS Libraies -->
<script src="<?= base_url('assets_user/bundles/izitoast/js/iziToast.min.js'); ?>"></script>

<script type="text/javascript">
    const displayOrNot = () => {
        const total = document.querySelectorAll('#content-table tr').length;

        if (total > 0) {
            document.querySelector('#container-table').classList.remove('d-none');
        } else {
            document.querySelector('#container-table').classList.add('d-none');
        }
    }

    displayOrNot() // first time

    $(document).ready(function() {
        $("#add").click(function(e) {
            e.preventDefault();
            const nama_barang = $("#nama_barang").val();
            const unit = $("#unit").val();
            const jumlah = $("#jumlah").val();
            const foto = $("#foto").val();
            const markup = `
                <tr>
                    <td>
                        ${nama_barang}
                        <input type="hidden" name="nama_barang[]" value="${nama_barang}" />
                    </td>
                    <td>
                        ${unit}
                        <input type="hidden" name="unit[]" value="${unit}" />
                    </td>
                    <td>
                        ${jumlah}
                        <input type="hidden" name="jumlah[]" value="${jumlah}" />
                    </td>
                    <td>
                        ${foto}
                        <input type="hidden" name="foto[]" value="${foto}" />
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm remove-row" style=" padding: .25rem .5rem; font-size: .875rem; line-height: 1.5; border-radius: .2rem; ">
                            <i class="icofont-ui-close"></i>
                        </button>
                    </td>
                </tr>
            `

            if (nama_barang !== '' && unit !== '' && jumlah !== '' && foto !== '') {
                $("#content-table").append(markup);

                // clear data
                $("#nama_barang").val('');
                $("#unit").val('');
                $("#jumlah").val('');
                $("#foto").val('');
            }

            displayOrNot()
        });

        $('#container-table').on('click', '.remove-row', function(e) {
            $(this).closest('tr')[0].remove()
        })

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click", ".remove", function() {
            $(this).parents(".form-row").remove();
        });
    });
</script>