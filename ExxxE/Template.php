<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
$student_FirstName = 'Alex';
$student_LastName = 'Vivert';
$chapter = 2;
$lab = 1;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>PHP Demo</title>
</head>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<div id="logo">
				<div style="margin-top:70px" class="whitetitle"><?php echo $student_FirstName; ?></div>
			</div>
			<div id="topheader">
				<div align="left" class="bodytext">
					<br />
					<strong>Student Name:<?php echo " ".$student_FirstName." ".$student_LastName; ?> </strong><br />
					Course: Fashion Design<br />
					Teacher: faramarz<br />
					Semester: The best of your life<br />
				</div>
			</div>
			<div id="menu">
				<div align="right" class="smallwhitetext" style="padding:9px;">
					<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Contact Us</a>
				</div>
			</div>
			<div id="contenttext">
				<div style="padding:10px">
					<span class="titletext"><?php echo "Chapter ".$chapter." - Lab practice ".$lab; ?></span>
				</div>
					<div class="bodytext" style="padding:12px;" align="justify">
					<strong>You have to use this template to practice PHP . Enjoy!</strong><br />
					
					
						<strong>ADD YOUR CODE HERE :)</strong><br />
						
						<form action="#" method="post">
			EmployeeID : <input type="text" name="EmployeeID"><br><br>
			FirstName : <input type="text" name="FirstName"><br><br>
			LastName : <input type="text" name="LastName"><br><br>
			GrossSalary : <input type="text" name="GrossSalary"><br><br>
			<input type="submit">
			
			</form>
				<?php 
			if (isset($_POST["EmployeeID"]) AND isset($_POST["FirstName"])AND
					isset($_POST["LastName"])AND isset($_POST["GrossSalary"]))
			{
				$EmployeeID = $_POST["EmployeeID"];
				$FirstName = $_POST["FirstName"];
				$LastName = $_POST["LastName"];
				$GrossSalary = $_POST["GrossSalary"];
				
			if (!empty($_POST["EmployeeID"])AND !empty($_POST["FirstName"]) 
					AND !empty($_POST["LastName"]) AND !empty($_POST["GrossSalary"]))
			{
				$EmployeeID = $_POST["EmployeeID"];
				$FirstName = $_POST["FirstName"];
				$LastName = $_POST["LastName"];
				$GrossSalary = $_POST["GrossSalary"];
				echo "Employee whit ID number<b>$EmployeeID</b>firstname<b>$FirstName
				</b>lastname<b>$LastName</b>her/his salary is:<b>$GrossSalary</b>";
			}
			else {echo "input are empty...";}
			}
			
			?>
					
				</div>
			</div>
			
			<div id="footer" class="smallgraytext">
				<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Contact Us</a>
			</div>
		</div>
	</div>
</body>
</html>