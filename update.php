<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $jenis_pakaian = $_POST['jenis_pakaian'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $query = "UPDATE laundry SET 
                nama_pelanggan = '$nama_pelanggan',
                jenis_pakaian = '$jenis_pakaian',
                harga = '$harga',
                status = '$status'
              WHERE id = $id";

    $result = $conn->query($query);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menyimpan data.";
    }
}

$conn->close();
?>
