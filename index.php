<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Class 49</title>
</head>
<body>


<?php 


	/**
	 * isseting student form
	 */


	if ( isset($_POST['add'])) {

		// get value

		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$uname = $_POST['uname'];
		$age = $_POST['age'];

		if( isset($gender = $_POST['gender'];)) {
			$gender = $_POST['gender'];
		}
		
		$shift = $_POST['shift'];
		$location = $_POST['location'];
		




		/**
		 *  Form validation and sendign data to database 
		 */



		if ( empty($name) || empty($email) || empty($cell) || empty($uname) || empty($age) || empty($gender) || empty($shift) || empty($location) || empty($photo) ) {
			
			$mess = "<p>All feilds are required !</p>";
		}







	}









 ?>



<div>
	<form class="form p-5 text-white shadow-lg" method="POST" enctype="multipart/form-data">
		<h1 class="text-center">Add New Student </h1>

		<?php 

		if ( isset($mess)) {
			echo $mess;
		}


		 ?>

	  <div class="form-group ">
	    <label for="exampleInputEmail1">Name</label>
	    <input name="name" type="text" class="form-control text-white h-25">
	  </div>

	  <div class="form-group ">
	    <label for="exampleInputEmail1">Email</label>
	    <input name="email" type="text" class="form-control text-white h-25">
	  </div>

	  <div class="form-group ">
	    <label for="exampleInputEmail1">Cell</label>
	    <input name="cell" type="text" class="form-control text-white h-25">
	  </div>

	  <div class="form-group ">
	    <label for="exampleInputEmail1">User Name</label>
	    <input name="uname" type="text" class="form-control text-white h-25">
	  </div>

	  <div class="form-group ">
	    <label for="exampleInputEmail1">Age</label>
	    <input name="age" type="text" class="form-control text-white h-25">
	  </div>

	  <div class="form-group ">
	    <label for="exampleInputEmail1">Gender</label><br>
	    <input name="gender" type="radio" value="Male" class="text-white p-2" id="male"><label class="p-1" for="male"> Male</label>
	    <input name="gender" type="radio" value="Female" class="text-white" id="female"><label class="p-1" for="female"> Female</label>
	  </div>

	  <div class="form-group ">
	    <label for="exampleInputEmail1">Shift</label>
	    <select class="form-control h-25 text-white" name="shift">
	    	<option class="text-dark" value="">--Select--</option>
	    	<option class="text-dark" value="day">Day</option>
	    	<option class="text-dark" value="evening">Evening</option>
	    </select>
	  </div>


	  <div class="form-group ">
	    <label for="exampleInputEmail1">Location</label>
	    <select class="form-control h-25 text-white" name="location">
	    	<option class="text-dark" value="">--Select--</option>
	    	<option class="text-dark" value="Dhaka">Dhaka</option>
	    	<option class="text-dark" value="Barisal">Barisal</option>
	    	<option class="text-dark" value="chittagong">chittagong</option>
	    	<option class="text-dark" value="Khulna">Khulna</option>
	    	<option class="text-dark" value="Mymensignh">Mymensignh</option>
	    	<option class="text-dark" value="Rangpur">Rangpur</option>
	    	<option class="text-dark" value="Sylhet">Sylhet</option>
	    </select>
	  </div>
	  
	  <div class="form-group ">
	    <label for="exampleInputEmail1">Photo</label>
	    <input name="photo" type="file" class="form-control-file text-white">
	  </div>
	  <button name="add" type="submit" class="btn btn-primary">Add new student</button>
	</form>
</div>






	<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>
		


	</script>


	
</body>
</html> 



