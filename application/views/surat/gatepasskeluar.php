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
                <h2 class="mb-2 title-color text-center" style="font-size: 2rem; font-family: Poppins, sans-serif; color:black;">GATE PASS KELUAR</h2>
                <p class="mb-4 text-center" style="font-family: Poppins, sans-serif; color:black;">Silahkan isi data berikut untuk kelengkapan pengantar surat Gate Pass <a href="<?= base_url('surat'); ?>">Masuk</a> / <a href="<?= base_url('surat/gatepasskeluar'); ?>">Keluar</a> :</p>
                <?= form_open_multipart(''); ?>
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
                                <input type="text" id="dari" class="form-control" placeholder="PT. Pertamina Patra Niaga FT Lomanis" disabled>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-label">Kepada</label>
                                <input type="text" id="kepada" class="form-control" aria-describedby="passwordHelpBlock" name="kepada" value="<?= set_value('kepada'); ?>">
                                <?= form_error('kepada', '<small class="text-danger pl-3">', '</small>'); ?>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Contoh : PT. Sekar Mamba
                                </small>
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
                                <input type="text" id="nama_barang" class="form-control" name="nama_barang" value="<?= set_value('nama_barang'); ?>">
                                <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="form-label">Unit</label>
                                <input type="text" id="unit" class="form-control" name="unit" value="<?= set_value('unit'); ?>">
                                <?= form_error('unit', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="form-label">Jumlah</label>
                                <input type="text" id="jumlah" class="form-control" name="jumlah" value="<?= set_value('jumlah'); ?>">
                                <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label></label>
                            <div class="buttons mt-2">
                                <a href="#" class="btn btn-icon btn-primary" id="add"><i class="far fa-edit"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama Barang</th>
                                                    <th>Unit</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
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

                        <div class="col-lg-12">
                            <label for="form-label">Foto Barang</label>
                            <div class="custom-file">
                                <input type="file" class="form-control" name="file">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
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
    $(document).ready(function() {
        $("#add").click(function (e){
            var nama_barang = $("#nama_barang").val();
            var unit = $("#unit").val();
            var jumlah = $("#jumlah").val();
            var markup = "<tr><td>"+ nama_barang +"</td><td>"+ unit +"</td><td>"+ jumlah +"</td></tr>";

            $("table tbody").append(markup);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click", ".remove", function() {
            $(this).parents(".form-row").remove();
        });

        $('#add_checklist').on('submit', function(e) {
            e.preventDefault();

            var id = $('#id_mobil').val();
            var temuan = [];
            var kategori = [];
            var batas = [];

            $("input[name='temuan[]']").map(function() {
                temuan.push($(this).val());
            }).get();

            $("select[name='kategori[]']").map(function() {
                kategori.push($(this).val());
            }).get();

            $("input[name='batas[]']").map(function() {
                batas.push($(this).val());
            }).get();

            $.ajax({
                url: '<?= base_url('checklist/saveChecklist'); ?>',
                method: "POST",
                data: {
                    id: id,
                    temuan: temuan,
                    batas: batas,
                    kategori: kategori
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    //console.log(data);
                    $('#submit').prop('disabled', false);

                    iziToast.success({
                        title: 'Ok!',
                        message: data.msg,
                        position: 'topRight'
                    });

                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                },
                error(xhr, status, error) {
                    console.log(xhr.responseJSON);

                    if (xhr.responseJSON.error_code == 'error_validation') {
                        $.each(xhr.responseJSON.data, function(key, value) {
                            iziToast.error({
                                title: 'Error!',
                                message: value,
                                position: 'topRight'
                            });
                        });
                    } else {
                        iziToast.error({
                            title: 'Error!',
                            message: xhr.responseJSON.msg,
                            position: 'topRight'
                        });
                    }
                },
                complete(xhr, status) {}
            });
        });
    });
</script>