		<?php
		$name=$_POST['name'];
		$place=$_POST['place'];
		$mobile=$_POST['mobile'];
		$booking=$_POST['booking'];
		if(empty($name))
		{
		echo'<br><h2><center><span style="color:red;">Please Enter Valid Name.</span></center></h2><br>';
		echo'<a href="registration.html">Go Back to Registration Page</a>';
		exit();
		}
		//place
		if(empty($place))
		{
			echo'<br><h2><center><span style="color:red;">Please Enter Valid Name.</span></center></h2><br>';
			echo'<a href="registration.html">Go Back to Registration Page</a>';
			exit();
		}
		//booking
		if(empty($booking))
		{
			echo'<br><h2><center><span style="color:red;">Please enter upto 200 people</span></center></h2><br>';
			echo'<a href="registration.html">Go Back to Registration Page</a>';
			exit();
		}
		//mobile number
		if((preg_match('/^[7-9]{1}[0-9]{9}$/',$mobile)))
		{}
		else
			{
			echo'<br><h2><center><span style="color:red;">Please Enter valid phone number</span></center></h2><br>';
			echo'<a href="registration.html">Go Back to Registration Page</a>';
			exit();
			}
			
			 //Database Connectivity
			//Database Name:abc
		   //Host:localhost
		   //Database user name:root
		  //Database Password:
		
		$dbname="abc";
		$host="localhost";
		$dbuser="root";
		$dbpass="";

		$conn=mysqli_connect($host,$dbuser,$dbpass,$dbname);

		if($conn->connect_error){
			die("Connection failed:".$conn->connect_error);
		}
		else
		{
			echo"Connected to database";
		}

		$sql="INSERT INTO tbi_reg(name,place,mobile,booking)VALUES('$name','$place','$mobile','$booking')";
		if(mysqli_query($conn,$sql))
		{
			echo'<br><h2><center><span style="color:red;">You are successfully Registrated</span></center></h2><br>';
			echo'<a href="registration.html">GO Back to Registration Page</a>';
		}
		else
		{
			echo'<br><h2><center><span style="color:red;">Unable to Register Record Try Again</span></center></h2><br>';
			echo'<a href="registration.html">GO Back to Registration Page</a>';	
		}
		mysqli_close($conn);
		?>