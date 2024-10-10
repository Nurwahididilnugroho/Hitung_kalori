<?php
// Membuat database dan tabel 
$db = new SQLite3('bmr.sqlite3');
$db->exec("CREATE TABLE IF NOT EXISTS bmr (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nama TEXT,
    umur REAL,
    jk TEXT,
    tinggi REAL,
    berat REAL,
    bmr REAL
)");

//  form 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];

    // Hitung BMR
    if ($jk === 'laki') {
        $bmr = 66.5  + (13.7 * $berat) + (5 * $tinggi) - (6.8 * $umur);
    } else {
        $bmr = 65.5 + (9.6* $berat) + (1.8 * $tinggi) - (4.7* $umur);
    }

    // Simpan ke database
    $stmt = $db->prepare("INSERT INTO bmr (nama, umur, jk, tinggi, berat, bmr) VALUES (:nama, :umur, :jk, :tinggi, :berat, :bmr)");
    $stmt->bindValue(':nama', $nama, SQLITE3_TEXT);
    $stmt->bindValue(':umur', $umur, SQLITE3_INTEGER);
    $stmt->bindValue(':jk', $jk, SQLITE3_TEXT);
    $stmt->bindValue(':tinggi', $tinggi, SQLITE3_FLOAT);
    $stmt->bindValue(':berat', $berat, SQLITE3_FLOAT);
    $stmt->bindValue(':bmr', $bmr, SQLITE3_FLOAT);
    $stmt->execute();

    $result = "$nama, Kalori yang harus anda penuhi adalah: $bmr perharinya"  ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kalori Tubuh</title>

    <style>
        body {
            background: url('bg1.jpg'), linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            background-blend-mode: overlay; /* Mencampur gambar dengan warna */
            background-size: cover;
            background-position: none;
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
        form {
            display: flex;
            flex-direction: column;
            font-family:helvetica;
       }
        label {
            margin: 10px 0 5px;
        }

        input, select {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .a {
            display:flex;
            /* margin:30px 0; */
            padding:10px;
            /* background: #A5B68D; */
            text-decoration:none;
            color:Black;
            font-family: helvetica;
            border-radius:5px;
            justify-content:center;
        }
        input, select {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3A6D8C;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6A9AB0;
        }

        @media (max-width: 768px) {
            body 
            {
                background-size: contain; /* Menggunakan contain agar gambar lebih adaptif di layar kecil */
            }
        }
        @media (max-width: 768px) {
            .container 
            {
                background-size: contain; /* Menggunakan contain agar gambar lebih adaptif di layar kecil */
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Hitung Kalori Tubuh Anda</h1>
        <br>
       <form action="" method="POST">

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>

        <label for="umur">Umur</label>
        <input type="number" name="umur" id="umur" required>

        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" required>
            <option value="laki">Pria</option>
            <option value="perempuan">Wanita</option>
        </select>

        <label for="tinggi">Tinggi Badan (Cm)</label>
        <input type="number" name="tinggi" id="tinggi" required>

        <label for="berat">Berat Badan (Kg)</label>
        <input type="number" name="berat" id="berat" required>

        <input type="submit" value="Hitung Kalori Tubuh">
        <a href="selamat_datang.php" class="a">Kembali</a>
       </form>

       <?php if (isset($result)):?>
        <h3><?php echo $result;?></h3>
        <?php endif;?>
    </div>
</body>
</html> 