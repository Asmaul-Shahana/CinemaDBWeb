<!DOCTYPE html>
<html>
<head>
<title>Cinema Databases</title>
<style type="text/css">
body {
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e) fixed; 
  }
  #gradl {
  height:35px;
  background: linear-gradient(to bottom, rgb(100,149,237,1), rgb(100,149,237,0));
}
.button {
  background-color:#B6D0E2;
  border: none;
  color: black;
  padding: 5px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 100px;
  height: 50px;
}
.button{border-radius: 8px;}
.button:hover {background-color: #929ed4;}
h1 {
            padding: 15px;
            text-align: center;
            text-decoration-color:blanchedalmond;
            color: blanchedalmond;
        }

	h2
	{
		text-align: center;
	color: blanchedalmondl;
	}
 h3 {
            text-align: center;
            color:blanchedalmond;
			font-family:Times new roman;
        }
table{
border-collapse: collapse;
margin: 25px 0;
min-width: 600px;
font-size: 1em;
text-align: left;
border-radius: 5px 5px 0 0;
overflow: hidden;
box-shadow: 5px 20px 50px #000;
margin-left:450px;
margin-top:30px;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
th{
background-color: #89CFF0;
color: white;
font-size: 1.3em;
font_weight: bold;

}
th,td{padding: 11px 13px;
}
tr{
	background-color:#c8dce9;
	border-bottom: 2px solid #c8dce9;}
tr:nth-child(even){background-color:  #daeffa;}
tr:last-of-type{
border-bottom: 2px solid #c8dce9;
}
</style>
</head>

<body>
<br><br>
<h1 style="text-align: center;"> VIEW CINEMA </h1>
<div id="gradl"></div>
<h3>Display Tables</h3>
<form action="" method="post">
	<div style="text-align: center;">
	   <button type = "view" name = "viewm" class="button button" style="font-family:Tahoma,sans-serif;"> Movie </button>
	   <button type = "view" name = "viewp" class="button button" style="font-family:Tahoma,sans-serif;"> Person </button>
	   <button type = "view" name = "viewr" class="button button" style="font-family:Tahoma,sans-serif;"> Role </button>
	   <button type = "view" name = "viewa" class="button button" style="font-family:Tahoma,sans-serif;"> View All</button>
	   <button type = "view" name = "viewa" class="button button" style="font-family:Tahoma,sans-serif;"> 
	   <a href="http://localhost/Rnd/CinemaWeb/homepage.php">Home Page</a></button>
	   </div>
	   </form>
  </body>
</html>
<?php
$link = mysqli_connect("127.0.0.1", "root", "", "cinema");

if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST['viewm']))
{
$query = "SELECT * FROM movie";

$result = mysqli_query( $link, $query);

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;
}

echo("<h2>MOVIE TABLE</h2>");

if ($table) {	
?>
<table class="center">
<thead>
<tr>
	<th>Movie Id</th>
	<th>Movie Title</th>
	<th>Release Year</th>        
</tr>
</thead>
<?php

	foreach($table as $d_row) {
	
		?>
		<tbody>
        <tr>
        	<td><?php echo($d_row["mid"]); ?></td>
        	<td><?php echo($d_row["mtitle"]); ?></td>
        	<td><?php echo($d_row["myear"]); ?></td>
		</tr>
	    </tbody>         
        <?php	

	}	

?>
</table>
<?php
}

mysqli_close($link);
}

?>
<?php

$link = mysqli_connect("127.0.0.1", "root", "", "cinema");

if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}


if(isset($_POST['viewp']))
{
$query = "SELECT * FROM person";

$result = mysqli_query( $link, $query);

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;
}

echo("<h2>PERSON TABLE</h2>");

if ($table) {
?>
<table class="center">
<thead>
<tr>
	<th>Person Id</th>
	<th>Person name</th>
	<th>Person gender</th>    
    <th>Person date of birth</th>    
</tr>
</thead>
<?php

	foreach($table as $d_row) {
	
		?>
		<tbody>
        <tr>
        	<td><?php echo($d_row["pid"]); ?></td>
        	<td><?php echo($d_row["pname"]); ?></td>
        	<td><?php echo($d_row["psex"]); ?></td>
            <td><?php echo($d_row["pdob"]); ?></td>
		</tr>
	    </tbody>         
        <?php	

	}	

?>
</table>
<?php
}

mysqli_close($link);
}

?>
<?php

$link = mysqli_connect("127.0.0.1", "root", "", "cinema");

if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST['viewr']))
{
$query = "SELECT * FROM role";

$result = mysqli_query( $link, $query);

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;
}

echo("<h2>ROLE TABLE</h2>");

if ($table) {
?>

<table class="center">
<thead>
<tr>
	<th>Role id</th>
	<th>person id</th>
	<th>part</th>        
</tr>
</thead>
<?php

	foreach($table as $d_row) {
	
		?>
		<tbody>
        <tr>
        	<td><?php echo($d_row["mid"]); ?></td>
        	<td><?php echo($d_row["pid"]); ?></td>
        	<td><?php echo($d_row["part"]); ?></td>
		</tr>
	    </tbody>         
        <?php	

	}	

?>
</table>
<?php
}

mysqli_close($link);
}
?>
<?php
if(isset($_POST['viewa']))
{

$link = mysqli_connect("127.0.0.1", "root", "", "cinema");

if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM movie";
$result = mysqli_query( $link, $query);

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;
}

echo("<h2>MOVIE TABLE</h2>");

if ($table) {	
?>

<table class="center">
<tr>
	<td>Movie Id</td>
	<td>Movie Title</td>
	<td>Release Year</td>        
</tr>
<?php

	foreach($table as $d_row) {
	
		?>
        <tr>
        	<td><?php echo($d_row["mid"]); ?></td>
        	<td><?php echo($d_row["mtitle"]); ?></td>
        	<td><?php echo($d_row["myear"]); ?></td>
		</tr>         
        <?php	

	}	

?>
</table>
<?php
}

$query2 = "SELECT * FROM person";
$result2 = mysqli_query( $link, $query2);

if (!$result2) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

while ( $row2 = mysqli_fetch_assoc( $result2 ) ) {
	$table2[] = $row2;
}

echo("<h2>PERSON TABLE</h2>");
if ($table2) {
?>
<table class="center">
<tr>
	<td>Person Id</td>
	<td>Person Name</td>
	<td>Gender</td>
	<td>Birth Year</td>        
</tr>
<?php

	foreach($table2 as $d_row) {
	
		?>
        <tr>
        	<td><?php echo($d_row["pid"]); ?></td>
        	<td><?php echo($d_row["pname"]); ?></td>
        	<td><?php echo($d_row["psex"]); ?></td>
        	<td><?php echo($d_row["pdob"]); ?></td>
		</tr>         
        <?php	

	}	

?>

</table>
<?php
}

$query3 = "SELECT * FROM role";

$result3 = mysqli_query( $link, $query3);

if (!$result3) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}
while ( $row3 = mysqli_fetch_assoc( $result3 ) ) {
	$table3[] = $row3;
}
echo("<h2>ROLE TABLE</h2>");

if ($table3) {	
?>
<table class="center">
<tr>
	<td>Movie Id</td>
	<td>Person Id</td>
	<td>Part</td>        
</tr>
<?php

	foreach($table3 as $d_row) {
	
		?>
        <tr>
        	<td><?php echo($d_row["mid"]); ?></td>
        	<td><?php echo($d_row["pid"]); ?></td>
        	<td><?php echo($d_row["part"]); ?></td>
		</tr>         
        <?php	

	}	

?>
</table>
<?php
}

mysqli_close($link);

}
?>