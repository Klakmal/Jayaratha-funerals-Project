<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	    <link rel="stylesheet" type="text/css" media="screen" href="css/menu/simple_menu.css">
<!--	    <link rel="stylesheet" type="text/css" href="css/profile.css">-->
	    <style type="text/css">
			.container1{
				width: 100%;
				background-color: ;
				padding: 5px;
			}
			.container2{
				max-width: 1000px;
				height: 100%;
				background-color: ;
			}

			.list{
				list-style-type: none;
				
				overflow: hidden;
			}
			.list li{
				
				padding: 15px 30px;
				background-color: #333;
				border-radius: 10px;
				margin: 1px .5px;
			}
            .active{
				padding: 15px 30px;
				background-color:firebrick;
				border-radius: 10px;
				margin: 1px .5px;
			}
            .list li:hover{
				
				padding: 15px 30px;
				background-color: black;
				margin: 1px .5px;
                
			}
            
            .list li:active{
				
				padding: 15px 30px;
				background-color: white;
				margin: 1px .5px;
                
			}
			.list li a{
				text-decoration: none;
				display: block;
				text-align: center;
				color: white;
			}
            
            .list li a:hover{
                color: darkgray;
            }
            
            .list li a:active{
                color: dimgray;
            }
			.pro-main{
				margin: 0px 0px;
				position: relative;
				width: 100%;
				background-color: ;
				
			}
			.pro1{
				width: 250px;
				height: 500px;	
				float: left;
				background-color: ;
				height: 100%;
			}
			.pro2{
				width: 750px;
				float: right;
				background-color: ;
				height: 100%;
				
			}
			.picture{
				background-color: ;
				margin-top: 0px; 
			}
			.bar{
				background-color: white;
				min-height: 540px;
				margin: 2px;
			}
			.cube{
				height: 68px;
				width: 100%;
				background-color: #333;
				padding: 20px 40px;
				color: white;
			}
            
            .cube1{
                min-height: 50px;
				width: 100%;
                padding-top: 20px;
            }
            .cube5{
                min-height: 50px;
                padding: 20px 50px;
                border: 1px solid gray;
            }
            
            .cube5 label{
                font-size: 16px;
            }
            
            .cube5 span{
                font-size: 14px;
                color: dimgray;
            }
            .cube2,.cube3,.cube4{
                width: 100%;
                padding: 10px 50px;
            }
            .fname{
                color: dimgray;
                font-size: 28px;
                
            }
	    </style>
	</head>
	<body>
		<?php include 'temp/header.php'; ?>
		<?php $id = $_GET["id"]; ?>
		<div class="container1" align="center">
			<div class="container2">
				<div class="pro-main">
					<div class="pro1">
						<div class="picture">
			<!--			<img src="getImage.php?id=<?php echo $id; ?>" width="250px" height="325px">			-->

						<?php
							require "dbcon/dbcon.php";
							$sql_image = "SELECT * FROM deathpersondetails WHERE deadPersonID = '".$id."'";
							$result_image = mysqli_query($conn, $sql_image);
							 if(mysqli_num_rows($result_image) > 0)  
							 {
							 	while($row_img = mysqli_fetch_array($result_image))
				      			{	
				      				echo '<img src = "data:image;base64,'.base64_encode($row_img['pro_img']).'" width="250px" height="325px">';
				      			}
				      		}
						?>
						<ul class="list">
						<li class="active"><a href="">Details</a></li>
						<li><a href="condolence.php?id=<?php echo $id; ?>">Condolence message</a></li>
						<li><a href="personalGallery.php?id=<?php echo $id; ?>">Gallery</a></li>
						<li><a href="webcasting.php?id=<?php echo $id; ?>">Video</a></li>
						</ul>
						</div>
					</div>
					<div class="pro2">
						<div class="bar" align="left">
					<?php 
						require "dbcon/dbcon.php";
						
						$extra = $name = $school = $univer = $employee = $details = "";
						$sql1 = "SELECT * FROM deathpersondetails WHERE deadPersonID = '".$id."'";
						$result1 = mysqli_query($conn, $sql1);
						 if(mysqli_num_rows($result1) > 0)  
						 {
						 	while($row = mysqli_fetch_array($result1))
			      			{
			      				$name .='
			      				<div class="cube1" align="center">
			      				<b><span class="fname">'.$row["deadPersonName"].'</span></b>
			      				</div>
                                <hr>
			      				';
			      				if($name != NULL){
			      				echo $name;
			      				}
                                $details .='
			      				<div class="cube5">
			      				<label><b>Description : </b></label><span>'.$row["Description"].'</span>
			      				</div>
			      				';
                                if($details != NULL){
			      				echo $details;
			      				}
			      				$school .='
			      				<div class="cube2">
			      				<label><b>School : </b></label><span>'.$row["school"].'</span>
			      				</div>
			      				';
			      				if($school != NULL){
			      				echo $school;
			      				}
			      				$univer .='
			      				<div class="cube3">
			      				<label><b>University : </b></label><span>'.$row["university"].'</span>
			      				</div>
			      				';
			      				if($univer != NULL){
			      				echo $univer;
			      				}
			      				$employee .='
			      				<div class="cube4">
			      				<label><b>Employee : </b></label><span>'.$row["employee"].'</span>
			      				</div>
			      				';
			      				if($employee != NULL){
			      				echo $employee;
			      				}
			      			}
						 }
					?>
					</div>
					</div>
				</div>
			</div>
		</div>


		<?php include 'temp/footer.php';  ?>
	</body>
</html>