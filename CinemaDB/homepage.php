<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	    body {
            background: linear-gradient(to bottom, #0f0c29, #4a4298, #24243e) fixed;
        }

        h1 {
			padding-top:200px;
			font-size:40px;
			font-family:Garamond,serif;   
            text-align: center;
            text-decoration-color:blanchedalmond;
            color: blanchedalmond;
        }

        h2 {
            text-align: center;
            color: #B6D0E2;
        }

        input[type=submit] {
            color: black;
            background-color: #B6D0E2;
            width: 150px;
            height: 75px;
            text-align: center;
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
        }
      img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
    </style>
</head>

<body>
	<h1>CINEMA DATABASE</h1>
	<div style="text-align: center;">
    <a id="id1" href="http://localhost/Rnd/CinemaWeb/insertpage.php">
        <input type="submit" value="Insert Data" class="button button" style="font-size=1em;">
    </a>
    <a id="id2" href="http://localhost/Rnd/CinemaWeb/viewtables.php">
        <input type="submit" value="View Data" class="button button" style="font-size=1em;">
    </a>
   </div>
</body>

</html>