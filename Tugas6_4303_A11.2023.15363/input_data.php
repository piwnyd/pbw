<?php
    include "conection.php";
    session_start();

    if (!isset($_SESSION['isLoggedIn']))
    {
        header("Location: login.php"); 
    }

    $judul = $_POST ['judul'];
    $tahun = $_POST ['tahun'];

    $dbh = $dbh->prepare("INSERT INTO buku (judul, tahun, create_by, create_at) VALUES (?,?,?,?)");
    $dbh->execute([$judul,$tahun,$_SESSION ['userid'], date("Y-m-d H:i:s")]);

    header("Location: home.php");