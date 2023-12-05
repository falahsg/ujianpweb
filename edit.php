<!-- edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Laundry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Edit Data Laundry</h2>

            <?php
            include('config.php');

            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $id = $_GET['id'];

                $query = "SELECT * FROM laundry WHERE id = $id";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
            ?>

            <form id="formEditLaundry" action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <label for="nama_pelanggan">Nama Pelanggan:</label>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan']; ?>" required>

                <label for="jenis_pakaian">Jenis Pakaian:</label>
                <input type="text" id="jenis_pakaian" name="jenis_pakaian" value="<?php echo $row['jenis_pakaian']; ?>" required>

                <label for="harga">Harga:</label>
                <input type="text" id="harga" name="harga" value="<?php echo $row['harga']; ?>" required>

                <label for="status">Status:</label>
                <input type="text" id="status" name="status" value="<?php echo $row['status']; ?>" required>

                <button type="submit">Simpan</button>
            </form>

            <?php
                } else {
                    echo "Data tidak ditemukan.";
                }

                $conn->close();
            }
            ?>
        </div>
    </div>
</body>
</html>
