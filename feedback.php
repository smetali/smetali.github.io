		<?php
		$uname=$_POST['uname'];
		$experience=$_POST['experience'];
		$suggestion=$_POST['suggestion'];
		$number=$_POST['number'];
		if(empty($uname))
		{
		echo'<br><h2><center><span style="color:red;">Please Enter Valid Name.</span></center></h2><br>';
		echo'<a href="feedback.html">Go Back to Feedback Page</a>';
		exit();
		}
		//experience
		if(empty($experience))
		{
			echo'<br><h2><center><span style="color:red;">Please Enter Valid Name.</span></center></h2><br>';
			echo'<a href="feedback.html">Go Back to Feedback Page</a>';
			exit();
		}
		//suggestion
		if(empty($suggestion))
		{
			echo'<br><h2><center><span style="color:red;">Please Enter Valid Name.</span></center></h2><br>';
			echo'<a href="feedback.html">Go Back to Feedback Page</a>';
			exit();
		}
		//number
		if((preg_match('/^[7-9]{1}[0-9]{9}$/',$number)))
		{}
		else
			{
			echo'<br><h2><center><span style="color:red;">Please Enter valid phone number</span></center></h2><br>';
			echo'<a href="feedback.html">Go Back to Feedback Page</a>';
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

		$sql="INSERT INTO tb_reg(uname,experience,suggestion,number)VALUES('$uname','$experience','$suggestion','$number')";
		if(mysqli_query($conn,$sql))
		{
			echo'<br><h2><center><span style="color:red;">Your Feedback Is Recored</span></center></h2><br>';
			echo'<a href="feedback.html">GO Back to Feedback Page</a>';
		}
		else
		{
			echo'<br><h2><center><span style="color:red;">Unable to Record Your Feedback.Try Again</span></center></h2><br>';
			echo'<a href="feedback.html">GO Back Feedback Page</a>';
		}
		mysqli_close($conn);
		?>