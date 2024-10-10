<?php 
include 'makanan.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_makanan = $_POST['nama_makanan'];
    $deskripsi_makanan = $_POST['deskripsi_makanan'];
    $kandungan_kalori = $_POST['kandungan_kalori'];
    $kategori_makanan = $_POST['kategori_makanan'];
    
    $tambah_data_makanan = "INSERT INTO makanan (
    nama_makanan, deskripsi_makanan, kandungan_kalori, kategori_makanan ) Values('$nama_makanan', '$deskripsi_makanan', '$kandungan_kalori', '$kategori_makanan')";
    $tmbh_mknn = $db->query($tambah_data_makanan);  

    if ($tmbh_mknn)
    {
        header('Location: MSG.php');
        exit ();        
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Makanan Sehat</title>
    <style>
        body {
            background: url('bg1.jpg'), linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            background-blend-mode: overlay; /* Mencampur gambar dengan warna */
            background-size: cover;
            background-position: none;
        }

        .container {
            max-width:1200px;
            margin: 100px auto;
            padding: 30px;
            background: white;
            border-radius: 8px;
            align-items:center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background: url('bg.jpeg.jpg'), linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            background-blend-mode: overlay; /* Mencampur gambar dengan warna */
            background-size: cover;
            background-position: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #1976D2;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin:10px;
        }

        button:hover {
            background-color: #1565C0;
        }

        h2{
            text-align:center;
            margin-bottom:10px;
        }

        a {
            text-decoration:none;
            color:Black;
            cursor: pointer;
            background:skyblue;
            padding:3px;
            border-radius:2px;
            margin:10px;
        }
        a:hover {
            color:red;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Tambah Rekomendasi Makanan Sehat</h2>
    <form action="tambah.php" method="Post">
        <label for="nama_makanan">Nama Makanan</label><br>
        <input type="text" name="nama_makanan" required><br>

        <label for="deskripsi_makanan">Deskripsi Makanan</label><br>
        <textarea name="deskripsi_makanan" required></textarea><br>

        <label for="kandungan_kalori">Kandungan Kalori</label><br>
        <input type="text" name="kandungan_kalori" required><br>

        <label for="kategori_makanan">Kategori Makanan</label><br>
        <input type="text" name="kategori_makanan" required><br>

        <button type="submit">Update Makanan</button>
        <a href="MSG.php">Kembali</a>
    </form>
    </div>
</body>
</html>
