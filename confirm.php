<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost"; 
$username = "root";        
$password = "";           
$dbname = "kontak";   

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : []; 
    $gender = $_POST['gender'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

   
    if (!empty($tanggal_lahir)) {
        $birthdate = new DateTime($tanggal_lahir);
        $today = new DateTime();
        $age = $today->diff($birthdate)->y;
    } else {
        $age = 'Tanggal lahir tidak valid';
    }

    if (count($hobbies) > 1) {
        $last_hobby = array_pop($hobbies); // Ambil hobi terakhir
        $hobbies_string = implode(", ", $hobbies) . " dan " . $last_hobby;
    } elseif (count($hobbies) == 1) {
        $hobbies_string = $hobbies[0]; // Jika hanya ada satu hobi
    } else {
        $hobbies_string = 'Tidak ada hobi yang dipilih'; // Jika tidak ada hobi yang dipilih
    }


        $sql = "INSERT INTO biodata (name, email, hobbies, gender, birthdate, age)
        VALUES ('$name', '$email', '$hobbies_string', '$gender', '$tanggal_lahir', $age)";

        if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan ke database!";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Confirmation Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Timus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="p1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="p2.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Terimakasih telah isi formnyaa</h1>
        <?php    
        echo "<p>Nama: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Hobi: $hobbies_string</p>";
        echo "<p>Jenis Kelamin: $gender</p>";
        echo "<p>Umur: $age tahun</p>"; // Display age instead of birthdate
        $conn->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  
</body>
</html>
