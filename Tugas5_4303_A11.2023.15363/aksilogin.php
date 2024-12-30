

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 0;
        background-color: #8174A0;
    }
    .container {
        background-color: #A2D2DF;
        max-width: 400px;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }
    .error {
        font-size: 14px;
        background-color: #FF8787;
        max-width: 400px;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }
</style>

<?php
    include "connection.php";

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $pswrd = $_POST['password'];

        $dbh = $koneksi->query("SELECT * FROM users WHERE email = '$email' AND active = 1");

        if ($dbh->rowCount() == 1) {
            $users = $dbh->fetch(PDO::FETCH_ASSOC);
            if (password_verify($pswrd, $users['password'])) {

                session_start();
                $_SESSION['username'] = $users['username'];
                $_SESSION['userid'] = $users['id'];
                $_SESSION['isLoggedIn'] = true;
                header("Location: home.php");
                exit();

            } else {
                echo "<div class='error'>Email atau Password Salah</div>";
            }
        } else {
            echo "<div class='error'>User tidak ditemukan</div>";
        }
    } else {
        echo "<div class='error'>Email atau password belum diisi.</div>";
    }
?>
