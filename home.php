
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fuied my-3 mx-2">
	<div class="display-4 bg-info text-center">HOME PAGE</div>
	<div class="row">
		<div class="col-sm-4">
	<div class="btn-group-vertical>
  <div class="dropdown ">
    <button type="button" class="btn p-0 m-0 btn-secondary" style="width: 150px;" dropdown-toggle" data-toggle="dropdown">
      Information
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="college_info.php">College Info</a>
      <a class="dropdown-item" href="teacher.php">Teacher Info</a>
    </div>
  </div>

		  	<div class="dropdown">
		    <button type="button" class="btn p-0 m-0 btn-secondary" style="width: 150px;" dropdown-toggle" data-toggle="dropdown">
		      ABOUT US
		    </button>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="https://www.youtube.com/channel/UC26v01jmJ1hV5Awnqt-CAZw">YouTube Channel</a>
		      <a class="dropdown-item" href="https://www.dilafroja.com/">WebSite</a>
		      <a class="dropdown-item" href="https://www.facebook.com/profile.php?id=100009293369589">Facebook</a>
		      <a class="dropdown-item" href="https://twitter.com/DilAfroja1">Twitter</a>
		      <a class="dropdown-item" href="https://www.linkedin.com/in/dil-afroja-536401206/">Linkedin</a>

		    </div>
		  	</div>
  <div class="dropdown ">
    <button type="button" class="btn p-0 m-0 btn-secondary" style="width: 150px;" dropdown-toggle" data-toggle="dropdown">
      STUDENT INFO
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="Student_Info(2017).php">Student Info(2017)</a>
      <a class="dropdown-item" href="Student_Info(2018).php">Student Info(2018)</a>
      <a class="dropdown-item" href="Student_Info(2019).php">Student Info(2019)</a>
      <a class="dropdown-item" href="Student_Info(2020).php">Student Info(2020)</a>
      <a class="dropdown-item" href="Student_Info(2021).php">Student Info(2021)</a>
    </div>
  </div>
  </div>
  	<div class="col-sm-8 my-3">
  		<nav class="navbar bg-dark" style="width: 350px;">
		  <form class="form-inline" style="" action="/action_page.php">
		    <input class="form-control mr-sm-2" type="text" placeholder="Search">
		    <button class="btn btn-success" type="submit">Search</button>
		  </form>
		</nav>
	</div>
</div>

	<form  action="college_info.php" class="my-5" method="post" enctype="multipart/form-data">
		
	<div class="form-group">
	  <label for="name" class="mr-sm-2">Student Full Name:</label>
	  	<input type="text" class="form-control mb-2 mr-sm-2" style="width: 300px;" placeholder="Student Full Name" name="name">
	  <label for="roll" class="mr-sm-2">Roll:</label>
	  	<input type="number" class="form-control mb-2 mr-sm-2" style="width: 300px;" placeholder="Roll" name="roll">
	  <label for="address" class="mr-sm-2">Student Address:</label>
	  	<input type="text" class="form-control mb-2 mr-sm-2" style="width: 300px;" placeholder="Student Address" name="address">
	  
	  <label>Father Name:</label>
				<input type="text" class="form-control" name="father_name" style="width: 300px;" placeholder="Father Name" >
			<label>Mother Name:</label>
				<input type="text" class="form-control" name="mother_name" style="width: 300px;" placeholder="Mother Name" >
	  <label for="phone no" class="mr-sm-2">Phone No:</label>
	  	<input type="number" class="form-control mb-2 mr-sm-2" style="width: 300px;" placeholder="Phone No" name="phone">
	  	<label>Email Address:</label>
				<input type="email" class="form-control" name="email" style="width: 300px;" placeholder="Email Address"  >
		<label>Session </label>
				<input type="number" class="form-control" name="session" style="width: 300px;" placeholder="Session" >
			<button type="submit" class="btn btn-primary my-5" style="width: 300px;">Submit</button>
			</div>

		</form>
	
</body>
</html>
