<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>

	<?php
	
	    $StudentIDError = "";
	  	$nameError = "";
		$genderError="";
		$emailError="";
		
		
		if($_SERVER["REQUEST_METHOD"] == "POST")
		   {
			if(empty($_REQUEST["StudentID"])) {
				  $StudentIDError = "student ID is required";
			}
			
		  } 
		  
		  
		   echo "<br>";
		
		  
		  
		  
		  	if($_SERVER["REQUEST_METHOD"] == "POST")
		   {
			if(empty($_REQUEST["name"])) {
				  $nameError = "student Name is required";
			}
			
		  } 
		  
		  
		   echo "<br>";
		
		
		
		
		
		  
	  	
		 
		
			if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["gender"])) {
				  $genderError = "gender is required";
			}
			
			}
			
			
	
	     echo "<br>";
		
	
		
		 
		
			if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["email"])) {
				  $emailError = "email is required";
			}
			
			}
			
			
			
		
	?>
			
			
			
		
	

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	
	
	
	
	
	StudentId: <input type="text" name="StudentID" required>

	<br />
	<span><?php echo $StudentIDError; ?></span><br />
	
	
	
	Name: <input type="text" name="name" required>

	<br />
	<span><?php echo $nameError; ?></span><br />
	
	
	
		Gender: <br /><input type="radio" name="gender" value="male">Male
	
	   <br /><input type="radio" name="gender" value="female">Female
	
	
	<br />
	<span><?php echo $genderError; ?></span><br />
	
	
	
	Email: <input type="text" name="email">
	<br /><span><?php echo $emailError; ?></span><br />
	
	
	
	Address:<br/>
	<input type="text" name="streetAddress"><br/>
	street address<br/>
	<input type="text" name="addressLine2"><br/>
	address line 2<br/>
	<input type="text" name="addressLine2"><br/>
	city<br/>
	<input type="text" name="region"><br/>
	region <br/>
	<input type="text" name="postel code"><br/>		
    postal code<br/>
	
	 <select name="country" id="country">
    <option value="Bangladesh">Bangladesh</option>
    <option value="India">India</option>
    <option value="Nepal">nepal</option>
   </select><br/>
   country:<br/>
	
	
	<input type="submit">
	</form>
</body>
</html>