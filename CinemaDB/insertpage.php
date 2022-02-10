<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e) fixed;
        }
#gradl {
  height:35px;
  background: linear-gradient(to bottom, rgb(100,149,237,1), rgb(100,149,237,0));
}
        h1 {
            padding: 15px;
            text-align: center;
            text-decoration-color:blanchedalmond;
            color: blanchedalmond;
        }

        h3 {
            text-align: center;
            color:blanchedalmond;
			font-family:Times new roman;
        }

        input[type=submit] {
            color: black;
            background-color: #B6D0E2;
            width: 100px;
            height: 50px;
            text-align: center;
			font-weight: bold;
        }

        a {
            margin-top: 2000px;
            text-align: center;
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
    </style>
</head>

<body>
<br><br>
<h1>INSERT CINEMA</h1>
<div id="gradl"></div>
	<h3>Insert data into tables</h3>
	<div style="text-align: center;">
    <button  type = "view" name = "viewa" class="button button" style="font-family:Tahoma,sans-serif; font-size=1em;"> 
	   <a href="http://localhost/Rnd/CinemaWeb/homepage.php">Home Page</a></button>
    <a id="id1" href="http://localhost/Rnd/CinemaWeb/movie.php">
        <input type="submit" value="MOVIE" class="button button" style="font-size=1em;">
    </a>
    <a id="id2" href="http://localhost/Rnd/CinemaWeb/person.php">
        <input type="submit" value="PERSON" class="button button" style="font-size=1em;">
    </a>
    <a id="id3" href="http://localhost/Rnd/CinemaWeb/role.php">
        <input type="submit" value="ROLE" class="button button" style="font-size=1em;">
    </a>
	</div class ="container">
    </div>
        
    <br> 
    <br><br>

</body>

</html>