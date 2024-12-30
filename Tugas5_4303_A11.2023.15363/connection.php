<?php

try { 
    
    $koneksi = new PDO("mysql:host=localhost;dbname=akademik", 'root', ''); 
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo"Koneksi gagal ", $e->getMessage();
    }

?>

