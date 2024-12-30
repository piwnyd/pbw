<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: login.php"); 
    exit();
}

$username = $_SESSION['username'];
$userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : "Unknown";

include "conection.php";

$dbh = $dbh->query("SELECT * FROM buku WHERE isdel = 0");
$bukuList = $dbh->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #8174A0;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: #EFB6C8;
            border-radius: 8px;
            border: 5px dashed rgb(169, 127, 71);
        }
        header h1 {
            color: #333;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        section {
            text-align: center;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color:#BC7FCD;
        }
        .btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>Selamat Datang, <?php echo htmlspecialchars($username); ?>!</h1>
    </header>

    <nav>
        <ul>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <section>
        <p>Halo, <?php echo htmlspecialchars($username); ?>! (ID: <?php echo $userid; ?>)</p>
        <p>Ini adalah halaman utama setelah login. Anda bisa mengakses halaman lain melalui menu di atas.</p>
    </section>

    <div class="tambahdata">
        <a href="input.php" class="btn " style="background-color:#BC7FCD;"> <strong>Tambah Data</strong></a>
        <table>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach ($bukuList as $bukus) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo htmlspecialchars($bukus['judul']); ?></td>
                    <td><?php echo htmlspecialchars($bukus['tahun']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $bukus['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $bukus['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </table>
    </div>

    <footer>
        <p>&copy; 2024 Aplikasi Anda. <a href="terms.php">Syarat & Ketentuan</a></p>
    </footer>
</div>

</body>
</html>