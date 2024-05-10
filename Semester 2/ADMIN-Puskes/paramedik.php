<?php
// Masukkan koneksi ke database
include_once('koneksi.php');

// Data yang akan dimasukkan
$data = array(
    array('John Doe', 'L', 'Jakarta', '1990-05-15', 'Dokter', '08123456789', 'Jl. Medis No. 123', 1),
    array('Jane Smith', 'P', 'Surabaya', '1995-10-20', 'Perawat', '0876543210', 'Jl. Perawat No. 456', 2),
    array('Alice Johnson', 'R', 'Bandung', '1988-03-25', 'Resepsionis', '08111223344', 'Jl. Resepsionis No. 789', 3)
);

// Lakukan iterasi untuk setiap data dan masukkan ke database
foreach ($data as $row) {
    $nama = $row[0];
    $gender = $row[1];
    $tmp_lahir = $row[2];
    $tgl_lahir = $row[3];
    $kategori = $row[4];
    $telepon = $row[5];
    $alamat = $row[6];
    $unit_kerja_id = $row[7];

    // Buat query untuk memasukkan data
    $query = "INSERT INTO nama_tabel (nama, gender, tmp_lahir, tgl_lahir, kategori, telepon, alamat, unit_kerja_id) 
              VALUES ('$nama', '$gender', '$tmp_lahir', '$tgl_lahir', '$kategori', '$telepon', '$alamat', $unit_kerja_id)";

    // Jalankan query
    $result = $dbh->exec($query);

    // Periksa apakah query berhasil dijalankan
    if ($result === false) {
        echo "Gagal memasukkan data: " . print_r($dbh->errorInfo(), true);
    }
}

// Tutup koneksi ke database
$dbh = null;
?>
