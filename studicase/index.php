<?php
require 'controler.php';
$students = query( "SELECT * FROM students");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        html{
            display:flex;
            justify-content:center;
            background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
            height: 150px;
            width:100%;
            margin-bottom:30px;  
        }
        img{
            width:00px;
        }
        .aa{
            color:#fff;
            text-decoration:none;
        }
        .card{
          /* padding-top:100px; */
          background-color:#fff;
          display:flex;
            justify-content:center;
            padding : 20PX
            width : 40px
        }

    

    </style> 
</head>
<body>
<div class="position-absolute top-50 start-50 translate-middle">
<div class="card" >
    
  <div class="card-body">
    <h1>Daftar Siswa</h1>

    <button type="button" class="btn btn-secondary"><a class="aa" href="tambah.php">Tambah data siswa</a></button>
    <br></br>

  
   

    <table border="1"  cellpadding="10" cellspacing="0" class="table table-bordered border-secondary">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Nis</th>
                <th>Rombel</th>
                <th>Rayon </th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php $i = 1;?>
            <?php foreach($students as $student ) {?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?=$student["nama"]?></td>
                    <td><?=$student["nis"]?></td>
                    <td><?=$student["rombel"]?></td>
                    <td><?=$student["rayon"]?></td>
                    <td><?=$student["status"]?></td>
                    <td>
                    <button type="button" class="btn btn-secondary"><a class="aa"href="ubah.php?id=<?= $student["id"];?>">ubah</a> </button>
                    <button type="button" class="btn btn-secondary"><a  class="aa"href="hapus.php?id=<?= $student["id"];?>" onclick="return confirm ('yakin?')">hapus</a></button>
                    <button type="button" class="btn btn-secondary"><a  class="aa"href="lihat.php?id=<?= $student["id"];?>">lihat</a></button> 

                    </td>
                </tr>
                <?php $i++;?>
                <?php  }?>
        </tbody>
    </table>
    </div>
</div>
</div>
</body>
</html>


