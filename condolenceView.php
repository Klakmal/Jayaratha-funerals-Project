<?php require "dbcon/dbcon.php"; ?>
	<title>Jayaratne Funerals</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/menu/simple_menu.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/contactUs.css">
	
<div id="par1" align="center">
		<div id="par" align="center">
			<div >	
				<h1><center class="contact_header" style = "font-family: myfont1; color: #a86205;"><b>CONDOLENCE VIEW</b></center></h1>
				<hr class="hh1">
			</div>
			<div class="tb" align="center">
				
							<h2> Jayarathne Funeral Directors (PVT)LTD</h2>
							<hr class="hh1"><br><br>
							
						<div></div>
						<div>
						<?php
							$deadPersonID = $_POST['deadPersonID'];
							if(empty($deadPersonID)){ 
								$deadnameerr = "</br>Dead person ID is required";
								echo $deadnameerr;
								$error = TRUE;
							}
							else{
								$sql = "SELECT * FROM deathpersondetails WHERE deadPersonID='$deadPersonID'";
								$query=(mysqli_query($conn,$sql));
								$rowCount = 1; /*Get the row count here using above sql query ($query)*/ 
								if ($rowCount == 1){
									$sql = "SELECT * FROM acceptvisitor WHERE deadPersonID='$deadPersonID'";
									$query=(mysqli_query($conn,$sql));
									
									echo" <table id=\"t01\">";
									echo"<tr>"; 
										echo"<th></th><th style = \"color: #a86205;\" ><h4><b>Visitor Name</b></h4></th>";
										echo"<th style = \"color: #a86205;\" ><h4><b>Message</b></h4></th>";
										echo"<th style = \"color: #a86205;\" ><h4><b>Relation</b></h4></th>";
									echo"</tr>"; 
									while ($row = mysqli_fetch_assoc($query)){
										
										 echo "<tr>";
												
											echo "<td></td><td style = \"color: #ffffff;\" >";
											echo $row['visname'];
											echo "</td>";

											echo "<td style = \"color: #ffffff;\">";
											echo $row['message'];
											echo "</td>";

											echo "<td style = \"color: #ffffff;\">";
											echo $row['relation'];
											echo "</td>";

										 echo "</tr>";
										 }
									}else{
										echo "Invalid Dead Person ID";
									}
							}
							
							?>
					</div>	
					<div> </div>
					
			</div>
		</div>
	</div>