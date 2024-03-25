<?php
include 'deskripsi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST['hewan']) && !empty($_POST['makhluk'])) {
        $deskripsi = deskripsiHewan($_POST['hewan'], $_POST['makhluk']);
        echo "<p>$deskripsi</p>";
    } else {
        echo "<p>Silakan isi nama hewan dan pilih jenis hewan terlebih dahulu.</p>";
    }
}

?>