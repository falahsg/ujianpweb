# ujianpweb A IAS FALAH SURYA G (50421001)

Buat database dengan nama laundry_ujian
```
CREATE DATABASE IF NOT EXISTS laundry_db;  
USE laundry_db;
```
Buat table dengan nama laundry  
```
CREATE TABLE IF NOT EXISTS laundry (  
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pelanggan VARCHAR(50) NOT NULL,  
    jenis_pakaian VARCHAR(50) NOT NULL,  
    harga INT NOT NULL,  
    status VARCHAR(20) NOT NULL  
);
```
Lalu sesuaikan host, user, pass, db . Pada config.php
