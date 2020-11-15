<?php
$mysqli = new mysqli ('localhost', 'root', '', 'modul3_crud') or die(mysqli_error($mysqli));

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];
    $kategori = $_POST['kategori'];
    $tanggal = $_POST['tanggal'];
    $mulai = $_POST['mulai'];
    $berakhir = $_POST['berakhir'];
    $tempat = $_POST['tempat'];
    $harga = $_POST['harga'];
    $benefit = $_POST['benefit'];

    $mysqli->query("INSERT INTO event_table (name, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, benefit) VALUES ('$name', '$deskripsi', '$gambar', '$kategori', '$tanggal', '$mulai', '$berakhir', '$tempat', '$harga', '$benefit')")
    or die ($mysqli->error);
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM event_table WHERE id=$id") or die($mysqli->error());

}