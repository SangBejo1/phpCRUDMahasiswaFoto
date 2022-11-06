<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
<link href='style.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <title>View</title>
    <style>
        div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}
      body {
  background: #f4f4f4;
}

.banner {
  background: #a770ef;
  background: -webkit-linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
  background: linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
}
.main_h {
  position: fixed;
  top: 0px;
  max-height: 70px;
  z-index: 999;
  width: 100%;
  padding-top: 17px;
  background: none;
  overflow: hidden;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  opacity: 0;
  top: -100px;
  padding-bottom: 6px;
  font-family: "Montserrat", sans-serif;
}
@media only screen and (max-width: 766px) {
  .main_h {
    padding-top: 25px;
  }
}

.open-nav {
  max-height: 400px !important;
}
.open-nav .mobile-toggle {
  transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
}

.sticky {
  background-color: rgba(255, 255, 255, 0.93);
  opacity: 1;
  top: 0px;
  border-bottom: 1px solid gainsboro;
}

.logo {
  width: 50px;
  font-size: 25px;
  color: #8f8f8f;
  text-transform: uppercase;
  float: left;
  display: block;
  margin-top: 0;
  line-height: 1;
  margin-bottom: 10px;
}
@media only screen and (max-width: 766px) {
  .logo {
    float: none;
  }
}

nav {
  float: right;
  width: 60%;
}
@media only screen and (max-width: 766px) {
  nav {
    width: 100%;
  }
}
nav ul {
  list-style: none;
  overflow: hidden;
  text-align: right;
  float: right;
}
@media only screen and (max-width: 766px) {
  nav ul {
    padding-top: 10px;
    margin-bottom: 22px;
    float: left;
    text-align: center;
    width: 100%;
  }
}
nav ul li {
  display: inline-block;
  margin-left: 35px;
  line-height: 1.5;
}
@media only screen and (max-width: 766px) {
  nav ul li {
    width: 100%;
    padding: 7px 0;
    margin: 0;
  }
}
nav ul a {
  color: #888888;
  text-transform: uppercase;
  font-size: 12px;
}

.mobile-toggle {
  display: none;
  cursor: pointer;
  font-size: 20px;
  position: absolute;
  right: 22px;
  top: 0;
  width: 30px;
  -webkit-transition: all 200ms ease-in;
  -moz-transition: all 200ms ease-in;
  transition: all 200ms ease-in;
}
@media only screen and (max-width: 766px) {
  .mobile-toggle {
    display: block;
  }
}
.mobile-toggle span {
  width: 30px;
  height: 4px;
  margin-bottom: 6px;
  border-radius: 1000px;
  background: #8f8f8f;
  display: block;
}

.row {
  width: 100%;
  max-width: 940px;
  margin: 0 auto;
  position: relative;
  padding: 0 2%;
}

* {
  box-sizing: border-box;
}

body {
  color: ##f4f4f4;
  background-image: linear-gradient(#BBD2C5, #536976);
  font-family: "Cardo", serif;
  font-weight: 300;
  -webkit-font-smoothing: antialiased;
}

a {
  text-decoration: none;
}

h1 {
  font-size: 30px;
  line-height: 1.8;
  text-transform: uppercase;
  font-family: "Montserrat", sans-serif;
}

p {
  margin-bottom: 20px;
  font-size: 17px;
  line-height: 2;
}

.content {
  padding: 50px 2% 250px;
}

.hero {
  position: relative;
  background: url(http://www.philippefercha.com/cd/toggle-menu-bg.jpg) no-repeat
    center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  text-align: center;
  color: #fff;
  padding-top: 110px;
  min-height: 500px;
  letter-spacing: 2px;
  font-family: "Montserrat", sans-serif;
}
.hero h1 {
  font-size: 50px;
  line-height: 1.3;
}
.hero h1 span {
  font-size: 25px;
  color: #e8f380;
  border-bottom: 2px solid #e8f380;
  padding-bottom: 12px;
  line-height: 3;
}

.mouse {
  display: block;
  margin: 0 auto;
  width: 26px;
  height: 46px;
  border-radius: 13px;
  border: 2px solid #e8f380;
  position: absolute;
  bottom: 40px;
  position: absolute;
  left: 50%;
  margin-left: -26px;
}
.mouse span {
  display: block;
  margin: 6px auto;
  width: 2px;
  height: 2px;
  border-radius: 4px;
  background: #e8f380;
  border: 1px solid transparent;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-name: scroll;
  animation-name: scroll;
}

@-webkit-keyframes scroll {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }
}
@keyframes scroll {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }
}

        
    </style>
    <script>
        // Sticky Header
$(window).scroll(function() {

if ($(window).scrollTop() > 100) {
    $('.main_h').addClass('sticky');
} else {
    $('.main_h').removeClass('sticky');
}
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
if ($('.main_h').hasClass('open-nav')) {
    $('.main_h').removeClass('open-nav');
} else {
    $('.main_h').addClass('open-nav');
}
});

$('.main_h li a').click(function() {
if ($('.main_h').hasClass('open-nav')) {
    $('.navigation').removeClass('open-nav');
    $('.main_h').removeClass('open-nav');
}
});

// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
var id = $(this).attr("href");
var offset = 70;
var target = $(id).offset().top - offset;
$('html, body').animate({
    scrollTop: target
}, 500);
event.preventDefault();
});
    </script>
	
</head>
<body>


  
<header class="main_h">

    <div class="row">
        <a class="logo" href="home.php">Data/Mahasiswa</a>

        <div class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav>
            <ul>
                <li><a href="view.php">view</a></li>
                <li><a href="index.php">Tambah</a></li>
                <li><a href="home.php">Home</a></li>
                <li></li>
            </ul>
        </nav>

    </div> <!-- / row -->

</header>

<div class="hero">

    <h1><span> Profile Data Mahasiswa </span><br></h1>

     <?php 
	 $batas = 5;
	 $halaman = @$_GET['halaman'];
	 if(empty($halaman)){
		 $posisi = 0;
		 $halaman = 1;
	 }
	 else{
		 $posisi = ($halaman-1) * $batas;
	 }
	 if(isset($_GET['search'])){
		 $search = $_GET['search'];
          $sql = ("SELECT image_url, nama, nim, tugas, uts, uas, keterangan, gender, (tugas+uts+uas)/3 as nilaiAkhir FROM images WHERE name LIKE '%$search%' ORDER BY id DESC limit $posisi,$batas");
	  } else{
			$sql="select * from images order by id Desc limit $posisi,$batas";
		}
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
            
            
             <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
             <a href="read.php?id=<?= $images['id'] ?>">
        <div class="bg-white rounded shadow-sm"><img src="uploads/<?=$images['image_url']?>" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <h5 class="text-dark"><?=$images['nama']?></h5>
            <p class="small text-muted mb-0"><?=$images['nim']?></p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">PNG</span></p>
              <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Mahasiswa</div>
            </div>
          </div>
        </div>\
         </a>
      </div>
            
             
           
 
            
    <?php } }?>
	
        <?php
            if(isset($_GET['search'])){
                $search= $_GET['search'];
                $query2="select * from images WHERE name LIKE '%$search%' order by id Desc";
            }else{
                $query2="select * from images order by id Desc";
            }
            $result2 = mysqli_query($conn,$query2);
            $jmldata = mysqli_num_rows($result2);
            $jmlhalaman = ceil($jmldata/$batas)
        ?>
        <br>
        
        <ul class="pagination">
            <?php
            for($i=1;$i<=$jmlhalaman;$i++){
                if ($i != $halaman){
                    if(isset($_GET['search'])){
                        $search = $_GET['search'];
                        echo "<li class='page-item'><a class='page-link' href='view.php?halaman=$i&search=$search'>$i</a></li>";
                    } else{
                        echo "<li class='page-item'><a class='page-link' href='view.php?halaman=$i'>$i</a></li>"; 
                    }
                }else {
                    echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                }
            }
            ?>
            </ul>
            </div>
 
           
        
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            
         
</body>
</html>