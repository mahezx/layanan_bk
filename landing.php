<?php 
include "koneksi.php";
$sql = "SELECT * FROM tb_guru";
$query = mysqli_query($koneksi,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelanding.css">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Archivo&family=Varta:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
</head>
<body>
    <div class="hero-section">
        <nav>
          <ul>
            <li class="logo">StarKonseling</li>
            <li class="nav-link">Home</li>
            <li class="nav-link">About</li>
            <li class="nav-link">Contact</li>
          </ul>
        </nav>
        <div class="hero-text">
          <h1 class="header-text">HORIZON</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
    </div>

    <div class="isi-content1">  
      <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3b" style="display: flex;justify-content: center;text-align: center;">
          <!-- php -->
          <div class="col" style="width:20%; background-color:#ffffff ; border-radius:20px; padding-top: 10px; margin: 15px;">
              <img src="./img/pexels-ozan-çulha-12145393.jpg" alt="Avatar" style="width:100% ;height: 300px;">
              <div class="container">
                <h4><b>John Doe</b></h4> 
                <p>Architect & Engineer</p> 
                <div>
                  <button>konseling</button>
                </div>
              </div>
          </div>         
          <!-- php end -->
        </div>
      </div>
    </div>

    <div class="isi-content2">
      <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" style="display:flex ; text-align: center; justify-content: center;">
            <!-- php -->
            <?php while($card = mysqli_fetch_array($query)){ ?>
          <div class="col" style="width:20%;; background-color:#d2cfca ; border-radius:20px; padding-top: 10px; margin: 15px;">
              <img src="foto/<?php echo $card["foto_guru"] ?>" alt="Avatar" style="width:100%; height: 300px;background-color:white ;">
              <div class="container">
                <h4><b><?php echo $card["nama_guru"] ?></b></h4> 
                <p>Architect & Engineer</p> 
                <div>
                  <button>selengkapnya</button>
                </div>
              </div>
          </div>
          <?php } ?>
          <!-- php end -->
    
      
        </div>
      </div>
    </div>   
</body>
</html>