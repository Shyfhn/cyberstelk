<?php
session_start();

include("connection.php");

$nis = $_SESSION["nis"];
$result = $database->query("SELECT * FROM siswa WHERE snis='$nis'");
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $name = $row['sname'];
} else {
    // error
}
?> 



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="home.css" />
  <link rel="icon" href="/icon/cyberlogo.png" type="x-icon">
  <title>Cyber Stelk</title>
</head>

<body>
  <!-- HEADER -->
  <header>
    <!-- NAVIGATION BAR -->
    <nav>
      <div class="profile">
       <a href="profile/profile.php"><img src="../icon/user.png" alt="user-icon"></a>
      <span class="name"><?php echo $name; ?></span>
    </div>
      <div class="navbar">
        <ul class="navlist">
          <li><a href="home.php">Home</a></li>
          <li><a href="dasboard.html">Dashboard</a></li>
        </ul>
        <i id="menu-icon" class="fa-solid fa-bars"></i>
        <i id="menu-iconn" class="fa-solid fa-x"></i>
      </div>
    </nav>
  </header>
  <!-- CONTENT 1 -->
  <div class="container-card">
    <section class="card-flex">
      <a href="#lomba">
        <div class="card">
          <img src="../icon/trophy.png">
        </div>
      </a>

      <a href="#event">
        <div class="card">
          <img src="../icon/calendar.png">
        </div>
      </a>

      <a href="#pengumuman">
        <div class="card">
          <img src="../icon/newspaper.png">
        </div>
      </a>

      <a href="#blog">
        <div class="card">
          <img src="../icon/notes.png">
        </div>
      </a>

    </section>
  </div>
  <!-- CONTENT 2 -->
  <div class="content-2">
    <h2>Daftar Lomba</h2>
    <div class="content-lomba" id="lomba">
      <div class="section-lomba" style="display: flex;">
        <div class="wrapper">
          <div class="item" >
            <img src="../picture/lomba1.jpeg">
            <p>Kompetisi Desain Tingkat Nasional 2023</p>
            <a href="#daftar"><button class="button">Daftar</button></a>
          </div>
          <div class="item">
            <img src="../picture/lomba2.jpeg">
            <p>National Olympiad Of Chemical Engineering</p>
            <a href="#daftar"><button class="button">Daftar</button></a>
          </div>
          <div class="item">
            <img src="../picture/lomba3.jpeg">
            <p>Lomba Desain Poster Karya Anak Bangsa 2023</p>
            <a href="#daftar"><button class="button">Daftar</button></a>
          </div>
          <div class="item">
            <img src="../picture/lomba4.jpeg">
            <p>Kompetisi Fotografer NEVER DARK 2023</p>
            <a href="#daftar"><button class="button">Daftar</button></a>
          </div>
          <div class="item">
            <img src="../picture/lomba5.jpeg">
            <p>Lomba Karya Tulis Ilmiah Bersama KAMAKARYA</p>
            <a href="#daftar"><button class="button">Daftar</button></a>
          </div>
          <div class="item">
            <img src="../picture/lomba6.jpeg">
            <p>GOGO! Lomba Desain Karakter "Jangan Menyerah"</p>
            <a href="#daftar"><button class="button">Daftar</button></a>
          </div>
          <div class="item">
            <img src="../picture/lomba7.jpeg">
            <p>EDUCATION FAIR 2023 Lomba Esai Nasional</p>
            <a href="#daftar"><button class="button">Daftar</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CONTENT 3 -->
  <div class="content-3">
    <h2>Event Sekolah</h2>
    <div class="content-event" id="event">
      <div class="section-event">
        <table style="border: 3px solid #8f1821; border-radius: 12px;" cellspacing="0" cellpadding="10">
          <thead style="background-color: #8f1821;">
            <tr>
              <th>No.</th>
              <th>Hari/Tanggal</th>
              <th>Nama Kegiatan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <td>Senin 02 Mei 2023</td>
              <td>Hari Pendidikan Nasional</td>
            </tr>
            <tr>
              <th>2</th>
              <td>Sabtu 20 Mei 2023</td>
              <td>Future Talent Arrive At School</td>
            </tr>
            <tr>
              <th>3</th>
              <td>Senin 22 Mei 2023</td>
              <td>STELK JUARA</td>
            </tr>
            <tr>
              <th>4</th>
              <td>Senin 22 Mei 2023</td>
              <td>TSFC Vol.2</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- CONTENT 4 -->
  <div class="content-4">
    <h2>Pengumuman</h2>
    <div class="content-pengumuman" id="pengumuman">
      <div class="section-pengumuman" style="display: flex;justify-content: center;align-items: center;margin: 0;padding: 0;">
        <div class="slider">
          <div class="slide">

            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">
            <input type="radio" name="radio-btn" id="radio6">

            <div class="st first">
              <img src="../picture/prestasi.JPG" style="border-radius: 12px 12px;">
            </div>
            <div class="st">
              <img src="../picture/eskul.jpeg" style="border-radius: 12px 12px;">
            </div>
            <div class="st">
              <img src="../picture/perpisahan.JPG" style="border-radius: 12px 12px;">
            </div>
            <div class="st">
              <img src="../picture/porseni.jpg" style="border-radius: 12px 12px;">
            </div>
            <div class="st">
              <img src="../picture/pameran.jpg" style="border-radius: 12px 12px;">
            </div>
            <div class="st">
              <img src="../picture/keseharian.jpg" style="border-radius: 12px 12px;">
            </div>

            <div class="nav-auto">
              <div class="a-b1"></div>
              <div class="a-b2"></div>
              <div class="a-b3"></div>
              <div class="a-b4"></div>
              <div class="a-b5"></div>
              <div class="a-b6"></div>
            </div>
          </div>

          <div class="nav-m">
            <label for="radio1" class="m-btn"></label>
            <label for="radio2" class="m-btn"></label>
            <label for="radio3" class="m-btn"></label>
            <label for="radio4" class="m-btn"></label>
            <label for="radio5" class="m-btn"></label>
            <label for="radio6" class="m-btn"></label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CONTENT 5 -->
  <div class="content-5">
    <h2>Blog</h2>
    <div class="content-blog" id="blog">
      <div class="section-blog">

      </div>
    </div>
  </div>
  <footer>
    <!-- FOOTER -->
    <div class="footer">
      <p>&copy; 2023 Create by RPL4</p>
    </div>
  </footer>
  </body>
</html>
