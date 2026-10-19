<!DOCTYPE html>
<html>
<head>
    <title>SPP ONLINE</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
<body>
    <br/>
    <br/>

<header>
    <h1 class="judul">PEMBAYARAN SPP ONLINE SMK NEGERI 3 BANJARBARU</h1>
</header>

<div class="wrap">
    <div class="blog">
        <div class="conteudo">

            <h3>Transaksi Pembayaran SPP</h3>
            <form method="get" action="">
                nisn: <input type="text" name="nisn" value="<?php echo isset($_GET['nisn']) ? $_GET['nisn'] : ''; ?>" />
                <input type="hidden" id="open" name="open" value="data_pembayaran"/>
                <input type="submit" name="cari" value="Cari Siswa" />
            </form>

            <?php
            include_once "src/koneksi.php";
            
            if(isset($_GET['nisn']) && $_GET['nisn'] != ''){
                $nisn_input = mysqli_real_escape_string($koneksi, $_GET['nisn']);
                
                $sqlSiswa = mysqli_query($koneksi, "SELECT * FROM kelas JOIN siswa
                ON kelas.id_kelas = siswa.id_kelas
                JOIN spp ON siswa.id_spp = spp.id_spp WHERE nisn='$nisn_input'");

                $data = mysqli_fetch_array($sqlSiswa);

                if($data) {
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
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>No. Bayar</th>
                    <th>Tgl. Bayar</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                </tr>

                <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran JOIN spp ON
                pembayaran.id_spp = spp.id_spp WHERE nisn='$data[nisn]'");
                $no = 1;
                while($d = mysqli_fetch_array($sql)){
                    echo "<tr>
                        <td>$no</td>
                        <td>$d[bulan_tagihan]</td>
                        <td>$d[tahun_tagihan]</td>
                        <td>$d[no_bayar]</td>
                        <td>$d[tgl_pembayaran]</td>
                        <td>$d[nominal]</td>
                        <td>$d[keterangan]</td>
                    </tr>";
                    $no++;
                }
                ?>
            </table>

            <?php
                } else {
                    echo "<p style='color:red;'>Data siswa dengan NISN tersebut tidak ditemukan.</p>";
                }
            } // Penutup if isset($_GET['nisn'])
            ?>

        </div>
    </div>
</div>

</body>
</html>