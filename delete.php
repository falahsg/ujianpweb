<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM laundry WHERE id = $id";
    $result = $conn->query($query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>
