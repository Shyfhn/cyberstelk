<?php
session_start();

include("connection.php");

$nis = $_SESSION["nis"];
$result = $database->query("SELECT * FROM siswa WHERE snis='$nis'");
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $name = $row['sname'];
    $kelas = $row['skelas'];
    // $nis = $row['snis'];
} else {
    // error
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$newName = $_POST['newname'];
$newKelas = $_POST['newkelas'];

$stmt = $database->prepare("UPDATE siswa SET sname=?, skelas=? WHERE snis=?");
$stmt->bind_param("sss", $newName, $newKelas, $nis);

if ($stmt->execute()) {
    $_SESSION["name"] = $newName;
    $_SESSION["kelas"] = $newKelas;

    header("Location: profile.php");

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="icon" href="icon/cyberlogo.png" type="x-icon">
    <title>Profile</title>
</head>
<body>
    <div class="profile">
        <img src="img/user.png" alt="Profile Picture" class="profile-picture">

        <form class="form1" action="" method="post">
            
            <label for="newname">Name</label>
            <input type="text" id="newname" name="newname" value="<?php echo $name; ?>">

            <label for="email">Nis</label>
            <input type="text" id="nis" name="Nis" value="<?php echo $nis; ?>">

            <label for="newname">Kelas</label>
            <input type="text" id="newkelas" name="newkelas" value="<?php echo $kelas; ?>">

            <div class="btn">
                <center><button type="submit">Update</button>
                <br>
                <a href="../home.php"><button type="button">Back</button></a>
                <a href="logout.php"><button type="button">Log out</button></a>
       </div>

        </form>
</body>
</html>

