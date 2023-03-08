<?php

require 'controler.php';
$id = $_GET["id"];
$student = query("SELECT * FROM students WHERE id = $id")[0]; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">    <title>Data Siswa</title>
    <style>
      html{
            display:flex;
            justify-content:center;
            background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
            height: 150px;
            width:100%;
            margin-bottom:30px;  
        }
        html, h1{
            display:flex;
            justify-content:center;
        }
        .gam {
        
    display: block;
    margin-left: auto;
    margin-right: auto;
}
        
        .aa{
            color:#fff;
            text-decoration:none;
        }
        img{
            width:150px;
        }
        
    </style> 
</head>
<body>

<div class="position-absolute top-50 start-50 translate-middle">
  

    <div class="card" style="width: 30rem;">
  <div class="card-body">
  <h1>Data Siswa</h1>
   
  

    <form action="" method="post">
     <input type="hidden" name="id" value="<?= $student["id"];?>"> 

         <label for="gambar"></label><br>


        <label for="nama"></label>
        <li><?= $student["nama"]; ?></li>
        
        <label for="nis"></label>
        <li><?= $student["nis"]; ?></li>
        
        <label for="rombel"></label>
        <li><?= $student["rombel"]; ?></li>
        
        <label for="rayon"></label>
        <li><?= $student["rayon"]; ?></li>
        
        <label for="status"></label>
        <li><?= $student["status"]; ?></li>

        <label for="hobi"></label>
        <li><?= $student["hobi"]; ?></li>

        <label for="alamat"></label>
        <li><?= $student["alamat"]; ?></li>

        <label for="cita_cita"></label>
        <li><?= $student["cita_cita"]; ?></li>

        <label for="merk_laptop"></label>
        <li><?= $student["merk_laptop"]; ?></li>
        <br>

       
        <li><img src="img/<?= $student["gambar"]; ?>" ></li>
        <br>
        <button type="button" class="btn btn-secondary"><a class="aa" href="index.php">back</a></button>

</form>
        </div>
</div>
</div>
        

    

</body>
</html>
