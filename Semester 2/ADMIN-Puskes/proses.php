<?php
// Menerima data dari permintaan AJAX
$inputData = $_POST['input'];

// Lakukan apa pun pemrosesan yang diperlukan di sini, contoh:
$result = "Data yang diterima: " . $inputData;

// Kirim respons kembali ke permintaan AJAX
echo $result;
?>
