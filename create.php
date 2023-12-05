<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $jenis_pakaian = $_POST['jenis_pakaian'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $query = "INSERT INTO laundry (nama_pelanggan, jenis_pakaian, harga, status) VALUES ('$nama_pelanggan', '$jenis_pakaian', '$harga', '$status')";
    $result = $conn->query($query);

    if ($result) {
        $response = ['success' => true];
    } else {
        $response = ['success' => false];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
