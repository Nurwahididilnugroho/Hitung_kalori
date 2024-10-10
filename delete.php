<?php
include 'MSG.php';

$id = $_GET['id'];

$stmt = $db->query("DELETE FROM makanan WHERE id = '$id'");
if ($stmt) {
    header('Location; makanan.php');

}