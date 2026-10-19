<?php
include_once "../src/koneksi.php";

// Proses simpan data
if (isset($_POST['btnSimpan'])) {

    $id_kelas = trim($_POST['id_kelas']);
    $nama_kelas = trim($_POST['nama_kelas']);
    $kompetensi_keahlian = trim($_POST['kompetensi_keahlian']);

    $pesanError = array();

    // Validasi
    if ($id_kelas == "") {
        $pesanError[] = "Data <b>ID KELAS</b> tidak boleh kosong!";
    }

    if ($nama_kelas == "") {
        $pesanError[] = "Data <b>NAMA KELAS</b> tidak boleh kosong!";
    }

    if ($kompetensi_keahlian == "") {
        $pesanError[] = "Data <b>KOMPETENSI KEAHLIAN</b> tidak boleh kosong!";
    }

    // Cek ID sudah ada atau belum
    $cek = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas='$id_kelas'");

    if (mysqli_num_rows($cek) > 0) {
        $pesanError[] = "ID Kelas sudah digunakan!";
    }

    // Jika ada error
    if (count($pesanError) > 0) {

        foreach ($pesanError as $pesan) {
            echo "<font color='red'>$pesan</font><br>";
        }

    } else {

        // Simpan data
        $sql = mysqli_query($koneksi, "INSERT INTO kelas
        (id_kelas,nama_kelas,kompetensi_keahlian)
        VALUES
        ('$id_kelas','$nama_kelas','$kompetensi_keahlian')");

        if ($sql) {

            echo "<center>
                    <font color='green'>
                        <h3>Data Berhasil Disimpan</h3>
                    </font>
                  </center>";

            echo "<meta http-equiv='refresh' content='2;url=?open=data_kelas'>";

        } else {

            die("Gagal menyimpan data : ".mysqli_error($koneksi));

        }

    }

}
?>

<h2>TAMBAH DATA KELAS</h2>

<form method="post" action="?open=tambah_kelas">

<table cellpadding="5">

<tr>
    <td>ID Kelas</td>
    <td>:</td>
    <td>
        <input type="text" name="id_kelas" size="20" maxlength="5" required>
    </td>
</tr>

<tr>
    <td>Nama Kelas</td>
    <td>:</td>
    <td>
        <input type="text" name="nama_kelas" size="30" maxlength="30" required>
    </td>
</tr>

<tr>
    <td>Kompetensi Keahlian</td>
    <td>:</td>
    <td>
        <input type="text" name="kompetensi_keahlian" size="40" maxlength="50" required>
    </td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td>
        <input type="submit" name="btnSimpan" value="Simpan">
        <input type="reset" value="Reset">
    </td>
</tr>

</table>

</form>