<?php
    include "conection.php";
    session_start();

    if (!isset($_SESSION['isLoggedIn']))
    {
        header("Location: login.php"); 
    }
    
    $id =$_GET['id'];

    $judul = $_POST ['judul'];
    $tahun = $_POST ['tahun'];

    $dbh = $dbh->prepare("UPDATE buku SET isdel =?, delete_by =?, delete_at = ? WHERE id = ?");
    $dbh->execute(
    [
        1,
        $_SESSION['userid'],
        date("Y-m-d H:i:s"),
        $id
    ]

    );

    header("Location: home.php");
    exit();
?>