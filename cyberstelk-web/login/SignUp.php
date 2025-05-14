<?php
include("connection.php");

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['newnis'];
    $name = $_POST['newname'];
    $kelas = $_POST['newkelas'];

    if (!empty($nis) && !empty($name) && !empty($kelas)) {
        $result = $database->query("SELECT * FROM siswa WHERE snis='$nis'");
        if ($result->num_rows == 1) {
            $error = '<label for="promter" class="form-label" style="color:rgb(255, 255, 255);text-align:center;">Already have an account for this Nis</label>';
        } else {
            $query1 = "INSERT INTO siswa(snis,sname,spassword,skelas) VALUES('$nis','$name','$nis','$kelas')";
            $query2 = "INSERT INTO webuser(nis,usertype) VALUES('$nis','s')";

            if ($database->query($query1) === TRUE && $database->query($query2) === TRUE) {
                $error = '<label for="promter" class="form-label" style="color:rgb(255, 255, 255);text-align:center;"></label>';
            } else {
                $error = '<label for="promter" class="form-label" style="color:rgb(255, 255, 255);text-align:center;">Error: ' . mysqli_error($database) . '</label>';
            }
            header("Location: index.php");
        }
    } else {
        $error = '<label for="promter" class="form-label" style="color:rgb(255, 255, 255);text-align:center;">Password Conformation Error! Reconform Password</label>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SignUp.css">
    <link rel="icon" href="../icon/cyberlogo.png" type="x-icon">
    <title>Sign Up</title>
</head>
<body>
    <div class="sign-container">
        <h1 id="Page_sign">Sign Up</h1>
        <form action="#" method="post">
            <div class="form-group">
            <label for="newnis">NIS</label>
            <input type="text" name="newnis" placeholder="Masukkan Nis">
            <label for="newname">NAMA</label>
            <input type="text" name="newname" placeholder="Masukkan Nama">
            <label for="newkelas">KELAS</label>
            <input type="text" name="newkelas" placeholder="Masukkan Kelas">
        </div>

      
     
        <div class="button">
            <a href="index.php">
            <button type="submit">Submit</button>
            </a>
        </div>
    </form>
</div>
</body>
</html>
