<?php
include 'koneksi.php';

// Proses ketika nyimpen ke database :)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO data1 (nama, email, whatsapp, alamat) VALUES ('$nama', '$email', '$whatsapp', '$alamat')";
    
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data berhasil disimpan');</script>";
        header("Location: ".$_SERVER['PHP_SELF']); // biar ga kemana-mana kalau pas di klik submit coy
        exit; // ini juga agar pas eksekusi skrip diatas yaitu """if (mysqli_query($koneksi, $sql)) { echo "<script>alert('Data berhasil disimpan');</script>";""" tidak kemana-mana
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

// Tampilan data yang telah disimpan
$result = mysqli_query($koneksi, "SELECT * FROM data1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TUGAS OOP PHP DATABASE SEDERHANA</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        display: flex;
    }
    .left-panel {
        width: 50%;
        padding: 20px;
    }
    .right-panel {
        width: 50%;
        padding: 20px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }
    form input[type="text"],
    form input[type="email"],
    form input[type="tel"],
    form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    form input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }
    form input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                echo "<h2>Data yang Telah Disimpan</h2>";
                echo "<table>";
                echo "<tr><th>Nama</th><th>Email</th><th>WhatsApp</th><th>Alamat</th></tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>".$row["nama"]."</td><td>".$row["email"]."</td><td>".$row["whatsapp"]."</td><td>".$row["alamat"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<h2>Data yang Telah Disimpan</h2>";
                echo "<p>Tidak ada data yang tersimpan.</p>";
            }
            ?>
        </div>
        <div class="right-panel">
            <form action="#" method="post">
                <h2>DATA</h2>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="whatsapp">WhatsApp:</label>
                <input type="tel" id="whatsapp" name="whatsapp" pattern="[0-9]{10,14}" required>

                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" required></textarea>

                <input type="submit" value="Kirim">
            </form>
        </div>
    </div>
</body>
</html>
