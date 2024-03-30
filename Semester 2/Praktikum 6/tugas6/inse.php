<?php

include 'konek.php';

$hewan = $_POST['Hewan'];
$jenis = $_POST['Jenis'];
$habitat = $_POST['Habitat'];

$query = "INSERT INTO hewan (Hewan, Jenis, Habitat)
          VALUES ('$hewan', '$jenis', '$habitat') ";

if($conn->query($query) === TRUE ){
    header("Location: halaman.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>