<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kesehatan</title>

    <style>
        body {
            background: url('bg1.jpg'), linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            background-blend-mode: overlay; /* Mencampur gambar dengan warna */
            background-size: cover;
            background-position: none;
            color:white;
        }

        
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            align-items:center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background: url('bg.jpeg.jpg'), linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            background-blend-mode: overlay; /* Mencampur gambar dengan warna */
            background-size: cover;
            background-position: center;
        }
        h1 {
           text-align:center;
        }
        .a {
            display:flex;
            margin:25px 0;
            padding:15px;
            background: #3A6D8C;
            text-decoration:none;
            color:white;
            font-family: helvetica;
            border-radius:20px;
            justify-content:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang Pecinta Sehat</h1>
        <br>
        <div>
            <a href="artikel.html" class="a">Artikel Pentingnya Kesehatan</a>
        </div>
        <div>
            <a href="hitung_kalori.php" class="a">Cek Metabolisme Tubuh Anda</a>
        </div>
        <div>
            <a href="MSG.php" class="a">Rekomendasi Makanan Sehat Buat Kamu</a>
        </div>
    </div>
</body>
</html>