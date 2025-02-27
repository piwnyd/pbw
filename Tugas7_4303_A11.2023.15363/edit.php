<?php
include "conection.php";
session_start();

if (!isset($_SESSION['isLoggedIn'])) {
    header("Location: login.php"); 
    exit();
}

$id = $_GET['id'];
$dbh = $dbh->prepare("SELECT * FROM buku WHERE id = ?");
$dbh->execute([$id]);

if ($dbh->rowCount() == 1) {
    $data = $dbh->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #8174A0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #EFB6C8;
            border-radius: 8px;
            border: 5px dashed rgb(169, 127, 71);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px; 
            border: 1px solid #EFB6C8; 
            border-radius: 5px;
        }

        .btn-custom {
            width: 100%;
            background-color: #BC7FCD;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
        }

        .btn-custom:hover {
            background-color: #041931;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="aksiedit.php" class="form-container">
            <h2>Edit Data Buku</h2>
            <div class="mb-3">
                <label for="judul">Judul:</label>
                <input name="judul" id="judul" type="text" value="<?php echo htmlspecialchars($data['judul']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="tahun">Tahun Terbit:</label>
                <input name="tahun" id="tahun" type="text" value="<?php echo htmlspecialchars($data['tahun']); ?>" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn-custom">Simpan</button>
        </form>
    </div>
</body>
</html>
<?php 
} else {
    echo "<script>alert('Data tidak ditemukan'); window.location.href='home.php';</script>";
}
?>