<html>
	<head>
	</head>
		<body>
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
		
		</body>

</html>

