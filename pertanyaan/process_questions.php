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

$hasil = 0;
if ($jwb1 == 0) {
    $hasil++;
};
if ($jwb4 == 0) {
    $hasil++;
};
if ($jwb5 == 0) {
    $hasil++;
};

if ($jwb8 == 0) {
    $hasil++;
};
if ($jwb10 == 0) {
    $hasil++;
};
if ($jwb11 == 0) {
    $hasil++;
};
if ($jwb12 == 0) {
    $hasil++;
};
if ($jwb13 == 0) {
    $hasil++;
};
if ($jwb14 == 0) {
    $hasil++;
};
if ($jwb15 == 0) {
    $hasil++;
};
if ($jwb16 == 0) {
    $hasil++;
};
if ($jwb17 == 0) {
    $hasil++;
};

// Simpan data ke tabel, termasuk id_masyarakat
$sql = "INSERT INTO phbs_answers ( jwb1, jwb2, jwb3, jwb4, jwb5, jwb6, jwb7, jwb8, jwb9, jwb10, jwb11, jwb12, jwb13, jwb14, jwb15, jwb16, jwb17)
        VALUES ('$jwb1', '$jwb2', '$jwb3', '$jwb4', '$jwb5', '$jwb6', '$jwb7', '$jwb8', '$jwb9', '$jwb10', '$jwb11', '$jwb12', '$jwb13', '$jwb14', '$jwb15', '$jwb16', '$jwb17')";

if ($conn->query($sql) === TRUE) {
    if ($hasil > 5) {
        header('Location: hasil.html');
    } else {
        header('Location: data.html');
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
