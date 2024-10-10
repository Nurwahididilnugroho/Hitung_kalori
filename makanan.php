<?php

$db = new SQLite3('makanan.db');

if(!$db) {
  echo $db->lastErrorMsg();
} else {
//   echo "Open database success...\n";
} 
// data siswa
$db->query("CREATE TABLE  IF NOT EXISTS makanan(
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 nama_makanan TEXT NOT NULL,
 deskripsi_makanan TEXT NOT NULL,
 kandungan_kalori NUMBER NOT NULL,
 kategori_makanan TEXT NOT NULL
)");
?>