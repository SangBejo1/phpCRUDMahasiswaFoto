<?php
require "db_conn.php";

if($_GET['id'] != null){
    $id = $_GET['id'];
    $script = "SELECT * FROM images where id=$id";
    $query = mysqli_query($conn,$script);
    $data = mysqli_fetch_array($query);
} else{
    header("location:read.php");
}

if(isset($_POST['hapus'])){
    $script2 = "DELETE FROM images where id = $id";
    $query2 = mysqli_query($conn,$script2);
    if($query2){
        header("location:view.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    body {
			font-family: 'Nunito', sans-serif;
			display: flex;
			justify-content: auto;
			align-items: auto;
			flex-direction: column;
			min-height: 100vh;
			background-image: linear-gradient(#ACB6E5, #86FDE8);
			
			
		}
        </style>
    <title>Profile Mahasiswa <?= $data['nama']?></title>

</head>
<body>
   

    <div class="wrapper">
        <div class="row">
            <div class="col-7">
            <img src="uploads/<?=$data['image_url']?>" class="img-thumbnail">
                </div>
                <div class="col-4">
                    <div class="box-detail-produk">
                        
</div>
<div class="box-detail-produk">
    <h2>PROFILE MAHASISWA</h2><br>
    <h3>Nama Mahasiswa : <?= $data['nama']?></h3><br>
    <h4>NIM : <?= $data['nim']?></h4><br>
    <h4>Nilai Tugas : <?= $data['tugas']?></h4><br>
    <h4>Nilai UTS : <?= $data['uts']?></h4><br>
    <h4>Nilai UAS : <?= $data['uas']?></h4><br>
    
    
</div><br>
<div class="col-md-12">
    <div class="box-detail-produk">
        <h2>Keterangan Mahasiswa</h2>
        <p><?= $data['keterangan'] ?></p>
</div>
</div>
<div class="box-detail-produk">
    <h2>Aksi lainnya</h2>
    <form method="post">
        <a href="edit.php?id=<?= $data['id']?>" class="btn btn-warning">Update Profile</a>
        <input type="submit" name="hapus" value="Hapus produk" class="btn btn-danger">
</form>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        </body>
        <html>