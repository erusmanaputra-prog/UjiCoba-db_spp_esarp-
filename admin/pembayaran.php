<h3>Transaksi Pembayaran SPP</h3>

<form method="get" action="">
    nisn: <input type="text" name="nisn" value="<?php echo isset($_GET['nisn']) ? htmlspecialchars($_GET['nisn']) : ''; ?>" />
    <input type="hidden" id="open" name="open" value="data_pembayaran"/>
    <input type="submit" name="cari" value="Cari Siswa" />
</form>


<?php
include_once "../src/koneksi.php";

if (isset($_GET['nisn']) && $_GET['nisn'] != '') {
    // Amankan input dari SQL Injection
    $nisn_cari = mysqli_real_escape_string($koneksi, $_GET['nisn']);

    // Query data siswa
    $sqlSiswa = mysqli_query($koneksi, "SELECT * FROM kelas 
        JOIN siswa ON kelas.id_kelas = siswa.id_kelas 
        JOIN spp ON siswa.id_spp = spp.id_spp 
        WHERE nisn='$nisn_cari'");

    // Cek apakah data siswa ada
    if (mysqli_num_rows($sqlSiswa) > 0) {
        $data = mysqli_fetch_array($sqlSiswa);
        $nisn = $data['nisn'];
?>
        <h3>Biodata Siswa</h3>
        <table>
            <tr>
                <td>nisn</td>
                <td>:</td>
                <td><?php echo $data['nisn']; ?></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td><?php echo $data['nama']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo $data['nama_kelas']; ?></td>
            </tr>
        </table>

        <h3>Tagihan SPP Siswa</h3>
        <table border="1" cellpadding="4" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>No. Bayar</th>
                <th>Tgl. Bayar</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Bayar</th>
            </tr>
        <?php
        // Query data tagihan pembayaran
        $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran 
            JOIN spp ON pembayaran.id_spp = spp.id_spp 
            WHERE nisn='$nisn'");

        $no = 1;
        // Menggunakan variabel $d agar tidak menimpa variabel $data siswa
        while ($d = mysqli_fetch_array($sql)) {
            echo "<tr>
                <td>$no</td>
                <td>{$d['bulan_tagihan']}</td>
                <td>{$d['tahun_tagihan']}</td>
                <td>{$d['no_bayar']}</td>
                <td>{$d['tgl_pembayaran']}</td>
                <td>{$d['nominal']}</td>
                <td>{$d['keterangan']}</td>
                <td align='center'>";
                
                if (empty($d['no_bayar'])) {
                    echo "<a href='proses_pembayaran.php?nisn=$nisn&act=bayar&id_pembayaran={$d['id_pembayaran']}'>Bayar</a>";
                } else {
                    echo "-";
                }
                
            echo "</td>
            </tr>";
            $no++;
        }
        ?>
        </table>
<?php
    } else {
        echo "<p style='color:red;'>Data siswa dengan NISN '" . htmlspecialchars($_GET['nisn']) . "' tidak ditemukan.</p>";
    }
}
?>