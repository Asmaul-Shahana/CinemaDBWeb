<!DOCTYPE html>
<html lang="en">
<head><link rel = "stylesheet" type ="text/css" href="style.css"></head>
<head>
  <style>
    body {
      background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e) fixed;
    }

    h2 {
      padding: 50px;
      text-align: center;
      color: blanchedalmond;
    }
    h3 {
     
      text-align: center;
      text-decoration-color: blanchedalmond;
      color: blanchedalmond;
    }
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<div style="text-align: center;">
  <h2>Thank You! Your data has been submitted.</h2>
  <br><br><br><br>
  <h3>goto to <a href="http://localhost/Rnd/CinemaWeb/homepage.php">Home Page</a></h3>
	</div>
  </body>

</html>
<?php
$cone = mysqli_connect("localhost", "root", "", "cinema");
if (!$cone) {
  die("Connection failed");
}
if (isset($_POST['btn1'])) {


  if (isset($_POST['mid'])) {
    $mid = $_POST['mid'];
  }
  if (isset($_POST['mtitle'])) {
    $mtitle = $_POST['mtitle'];
  }
  if (isset($_POST['myear'])) {
    $myear = $_POST['myear'];
  }

  $sql = "insert into movie(mid,mtitle,myear) values($mid,'$mtitle',$myear)";
  mysqli_query($cone, $sql);

}

if (isset($_POST['btn2'])) {


  if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];
  }
  if (isset($_POST['pname'])) {
    $pname = $_POST['pname'];
  }
  if (isset($_POST['psex'])) {
    $psex = $_POST['psex'];
  }
  if (isset($_POST['pdob'])) {
    $pdob = $_POST['pdob'];
  }


  $sql = "insert into person(pid,pname,psex,pdob) values('$pid','$pname','$psex','$pdob')";
  mysqli_query($cone, $sql);

}

if (isset($_POST['btn3'])) {

  if (isset($_POST['mid'])) {
    $mid = $_POST['mid'];
  }
  if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];
  }
  if (isset($_POST['part'])) {
    $part = $_POST['part'];
  }

  $sql = "insert into role(mid,pid,part) values('$mid','$pid','$part')";
  mysqli_query($cone, $sql);
  mysqli_close($cone);
}


?>