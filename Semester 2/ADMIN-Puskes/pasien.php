<?php
require_once 'koneksi.php';

$sql = "SELECT * FROM pasien";
$query = $dbh->query($sql);

?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Pasien</h3>
        <a href="pasien_create.php" class="btn btn-primary">Tambah Pasien</a>
    </div>

    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>JK</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        <?php
        $no = 0;
        // Mengecek apakah terdapat data pasien
        if ($pasiens->rowCount() > 0) {
            foreach ($pasiens as $pasien) : ?>
                <tr>
                    <td><?= ++$no; ?></td>
                    <td><?= htmlspecialchars($pasien['nama']) ?></td>
                    <td><?= htmlspecialchars($pasien['tmp_lahir']) ?></td>
                    <td><?= htmlspecialchars($pasien['tgl_lahir']) ?></td>
                    <td><?= htmlspecialchars($pasien['gender']) ?></td>
                    <td><?= htmlspecialchars($pasien['alamat']) ?></td>
                    <td>
                        <a href="pasien_edit.php?id=<?= $pasien['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="pasien_delete.php?id=<?= $pasien['id'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        <?php endforeach;
        } else {
            // Jika tidak ada data pasien
            echo "<tr><td colspan='7'>Tidak ada data pasien</td></tr>";
        }
        ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>