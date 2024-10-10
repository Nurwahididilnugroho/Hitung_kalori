<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Makanan Sehat</title>

    <style>
        body {
            background: url('bg1.jpg'), linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            background-blend-mode: overlay;
            background-size: cover;
            font-family: Arial, sans-serif;
            word-spacing: 2px;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background: url('bg.jpeg.jpg'), linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            background-blend-mode: overlay;
            background-size: cover;
            background-position: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #3A6D8C;
            color: white;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid white;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        /* Menambahkan jarak antar baris tabel */
        tr {
            margin-bottom: 10px; /* Jarak antar baris */
        }

        tr + tr {
            margin-top: 10px; /* Jarak setelah baris pertama */
        }

        a {
            text-decoration: none;
            color: black;
            background: whitesmoke;
            padding: 5px 10px;
            border-radius: 4px;
            display: inline-block;
        }

        a:hover {
            color: red;
        }

        th {
            background-color: #2E5B72;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
                margin: 20px auto;
            }

            table, th, td {
                font-size: 14px;
                padding: 8px;
            }

            a {
                padding: 4px 8px;
            }
        }

        @media (max-width: 480px) {
            body {
                word-spacing: 1px;
            }

            .container {
                padding: 10px;
                margin: 10px auto;
            }

            table, th, td {
                font-size: 12px;
                padding: 6px;
            }

            a {
                padding: 3px 6px;
                font-size: 12px;
            }

            th, td {
                display: block;
                width: 100%;
            }

            tr {
                display: flex;
                flex-direction: column;
                border-bottom: 1px solid white;
                margin-bottom: 15px;
            }

            table thead {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rekomendasi Makanan Sehat</h1>
        <a href="tambah.php">Tambahkan Data Makanan</a>
        <table>
            <thead>
                <tr>
                    <th>Nama Makanan</th>
                    <th>Deskripsi Makanan</th>
                    <th>Kandungan Kalori</th>
                    <th>Kategori Makanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'makanan.php';
                $mkn = "SELECT * FROM makanan";
                $mn = $db->query($mkn);
                
                while ($m = $mn->fetchArray()):
                ?>
                <tr>
                    <td><?php echo $m['nama_makanan']; ?></td>
                    <td><?php echo $m['deskripsi_makanan']; ?></td>
                    <td><?php echo $m['kandungan_kalori']; ?></td>
                    <td><?php echo $m['kategori_makanan']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $m['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $m['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br><br>
        <a href="selamat_datang.php">Kembali</a>
    </div>
</body>
</html>
