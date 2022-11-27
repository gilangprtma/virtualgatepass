<div class="content-body">

    <h4>GATE PASS MASUK</h4>
    <img style="width:150px;" float="right;" src="<?= base_url('assets/images/patra.png'); ?>">
    <br>
    <br>

    <table class="table">
        <tbody>
            <tr>
                <th style="width: 110px;">Gate Pass Nomor</th>
                <th style="width: 15px;">:</th>
                <th style="width: 260px;"><?php echo $cetak['no_gatepass'] ?></th>
                <th><?= date_indo($cetak['tanggal_permohonan']); ?></th>
            </tr>
            <tr>
                <th style="width: 110px;">Dasar</th>
                <th style="width: 15px;">:</th>
                <th><?= $cetak['dasar_pengiriman']; ?></th>
            </tr>
            <tr>
                <th style="width: 110px;">Pekerjaan</th>
                <th style="width: 15px;">:</th>
                <th><?= $cetak['pekerjaan']; ?></th>
            </tr>
            <tr>
                <th style="width: 110px;">Dari</th>
                <th style="width: 15px;">:</th>
                <th><?= $cetak['dari']; ?></th>
            </tr>
            <tr>
                <th style="width: 110px;">Untuk dikirim ke</th>
                <th style="width: 15px;">:</th>
                <th><?= $cetak['kepada']; ?></th>
            </tr>
            <tr>
                <th style="width: 110px;">Atas tanggungan</th>
                <th style="width: 15px;">:</th>
                <th><?= $cetak['dari']; ?></th>
            </tr>
        </tbody>
    </table>

    <br>
    <br>

    <table class="table table-bordered" border="1" style="width: 100%;">
        <thead>
            <tr>
                <th style="text-align: center; padding: 10px; width: 40px;">No</th>
                <th style="text-align: center; padding: 10px;">Nama Barang</th>
                <th style="text-align: center; padding: 10px;">Unit</th>
                <th style="text-align: center; padding: 10px;">Jumlah Barang</th>
                <th style="text-align: center; padding: 10px;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cetak['barang'] as $i => $barang) : ?>
                <tr>
                    <td style="text-align: center; padding: 10px; width: 40px;"><?php echo $i + 1 ?></td>
                    <td style="text-align: left; padding: 10px;"><?= $barang['nama']; ?></td>
                    <td style="text-align: center; padding: 10px;"><?= $barang['unit']; ?></td>
                    <td style="text-align: center; padding: 10px;"><?= $barang['jumlah']; ?></td>
                    <td style="text-align: center; padding: 10px;">
                        <img src="<?= $barang['foto']; ?>" alt="<?= $barang['nama']; ?>">
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <br> <br> <br>

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

    <br> <br> <br>

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

    <!-- <br style="page-break-after: always;"> -->
</div>