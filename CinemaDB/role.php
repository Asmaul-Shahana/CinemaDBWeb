<!DOCTYPE html>
<html lang="en">
<head><link rel = "stylesheet" type ="text/css" href="style.css"></head>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

			<div class="main">
				<form>
					<label for="chk" aria-hidden="true">Role Information</label>
					<input type="text" name="mid" placeholder="Enter movie id" required="">
					<input type="text" name="pid" placeholder="person id" required="">
			
          <input type="text" name="part" placeholder="role" required="">
          <input type="submit" name="btn3" value="Submit" style="color : red" aling="center"><br>
				</form>
			</div>

</body>

</html>