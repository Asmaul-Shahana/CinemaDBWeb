<!DOCTYPE html>
<html lang="en">

<head>
<link rel = "stylesheet" type ="text/css" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <title>Form In PHP</title>
  <style>
body {
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e) fixed;
        }
  </style>
</head>

<body>

<div style="border: black;">
  <form action="all.php" method="post" >

  <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="Enter Movie details">
				<form>
					<label for="chk" aria-hidden="true">Movie Information</label>
					<input type="number_formate" name="mid" placeholder="Enter movie id" required="">
					<input type="text" name="mtitle" placeholder="Movie name" required="">
			
          <input type="text" name="myear" placeholder="Myear" required="">
          <input type="submit" name="btn1" value="Submit" style="color : red" aling><br>
				</form>
			</div>
 

  </form>
  </div>

</body>

</html>