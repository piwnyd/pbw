<?php
include "conection.php"; // Pastikan file ini berisi koneksi dengan $dbh

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $pswrd = $_POST['password'];

    // Gunakan prepared statement untuk mencegah SQL Injection
    $stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email AND active = 1");
    $stmt->execute(['email' => $email]);

    if ($stmt->rowCount() == 1) {
        $users = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verifikasi password
        if (password_verify($pswrd, $users['password'])) {
            session_start();
            $_SESSION['username'] = $users['username'];
            $_SESSION['userid'] = $users['id'];
            $_SESSION['isLoggedIn'] = true;
            header("Location: home.php");
            exit;
        } else {
            echo "<div class='error'>Password salah.</div>";
        }
    } else {
        echo "<div class='error'>User tidak ditemukan atau belum aktif.</div>";
    }
} else {
    echo "<div class='error'>Email atau password belum diisi.</div>";
}
?>