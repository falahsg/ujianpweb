<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laundry CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Tambah Data Laundry</h2>
            <form id="formLaundry" action="create.php" method="post">
                <label for="nama_pelanggan">Nama Pelanggan:</label>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" required>

                <label for="jenis_pakaian">Jenis Pakaian:</label>
                <input type="text" id="jenis_pakaian" name="jenis_pakaian" required>

                <label for="harga">Harga:</label>
                <input type="text" id="harga" name="harga" required>

                <label for="status">Status:</label>
                <input type="text" id="status" name="status" required>

                <button type="button" onclick="tambahData()">Tambah</button>
            </form>
        </div>

        <div class="data-container">
            <h2>Data Laundry</h2>
            <table id="dataLaundry">
                
            </table>
        </div>
    </div>

    <script>
        function tambahData() {
            var form = document.getElementById('formLaundry');
            var formData = new FormData(form);

            fetch('create.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    loadLaundryData();
                    form.reset();
                } else {
                    alert('Gagal menambahkan data laundry.');
                }
            })
            .catch(error => console.error('Error:', error));
        }

        function loadLaundryData() {
            fetch('load_data.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('dataLaundry').innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
        }

        document.addEventListener('DOMContentLoaded', function() {
            loadLaundryData();
        });
    </script>
</body>
</html>
