<!-- load_data.php -->
<?php
include('config.php');

$query = "SELECT * FROM laundry";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nama_pelanggan'] . "</td>";
        echo "<td>" . $row['jenis_pakaian'] . "</td>";
        echo "<td>" . $row['harga'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Tidak ada data laundry.</td></tr>";
}

$conn->close();
?>
