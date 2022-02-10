
<!DOCTYPE html>
<html lang="en">
<head><link rel = "stylesheet" type ="text/css" href="style.css"></head>
<main>
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
<body >
   <div style="border: black;">
  <form action="all.php" method="post" >

  <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Person Information</label>
					<input type="number_formate" name="pid" placeholder="Enter person id" required="">
					<input type="text" name="pname" placeholder="Person name" required="">
					<input type="text" name="psex" placeholder="Gender" required="">
          <input type="date" name="pdob" placeholder="Date" required="">
          <input type="submit" name="btn2" value="Submit" style="color : red" aling><br>
				</form>
			</div>
 

  </form>
  </div>
   
</body>
  </main>
</html>
