<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sitabis";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form kuesioner
$jwb1 = $_POST['jwb1'];
$jwb2 = $_POST['jwb2'];
$jwb3 = $_POST['jwb3'];
$jwb4 = $_POST['jwb4'];
$jwb5 = $_POST['jwb5'];
$jwb6 = $_POST['jwb6'];
$jwb7 = $_POST['jwb7'];
$jwb8 = $_POST['jwb8'];
$jwb9 = $_POST['jwb9'];
$jwb10 = $_POST['jwb10'];
$jwb11 = $_POST['jwb11'];
$jwb12 = $_POST['jwb12'];
$jwb13 = $_POST['jwb13'];
$jwb14 = $_POST['jwb14'];
$jwb15 = $_POST['jwb15'];
$jwb16 = $_POST['jwb16'];
$jwb17 = $_POST['jwb17'];

// Lanjutkan dengan mengambil data pertanyaan lainnya

// Simpan data ke tabel
$sql = "INSERT INTO phbs_answers (jwb1, jwb2, jwb3, jwb4, jwb5, jwb6, jwb7, jwb8, jwb9, jwb10, jwb11, jwb12, jwb13, jwb14, jwb15, jwb16, jwb17)
        VALUES ('$jwb1', '$jwb2', '$jwb3', '$jwb4', '$jwb5', '$jwb6', '$jwb7', '$jwb8', '$jwb9', '$jwb10', '$jwb11', '$jwb12', '$jwb13', '$jwb14', '$jwb15', '$jwb16', '$jwb17')";  // Sesuaikan dengan jumlah pertanyaan

if ($conn->query($sql) === TRUE) {
    header('Location: hasil.html');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
