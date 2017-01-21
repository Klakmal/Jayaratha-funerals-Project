<!DOCTYPE html>
<html>
    <head>
    <title>PayPal Transaction Suceeded</title>

    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/menu/simple_menu.css">
    </head>
    <body>
        <?php include 'temp/header.php';  
        require "dbcon/dbcon.php"; 	

		//Store transaction information from PayPal
		$res_id = $_REQUEST['reservation_id']; 
		$item_name = $_REQUEST['item_name']; 
		$txn_id = $_REQUEST['tx'];
		$total_amount = $_REQUEST['amt'];
		$currency_code = $_REQUEST['cc'];
		$payment_status = $_REQUEST['st'];

		//Get product price
		$sql="SELECT total FROM reservations WHERE res_id = $res_id";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		$total = $row['total'];

		if(!empty($txn_id) && $total_amount == $total){
			//Check if payment data exists with the same TXN ID.
		    $prevPaymentResult = mysqli_query("SELECT payment_id FROM paypal_payment WHERE txn_id = '".$txn_id."'",$conn);

		    if(mysqli_num_rows($prevPaymentResult) > 0){
		        $paymentRow = mysqli_fetch_assoc($prevPaymentResult);
		        $last_insert_id = $paymentRow['payment_id'];
		    }else{
		        //Insert tansaction data into the database
		        $insert = mysqli_query("INSERT INTO paypal_payment (resid,item_name,txn_id,total_amount,currency_code,payment_status) VALUES('".$res_id."','".$item_name."','".$txn_id."','".$total_amount."','".$currency_code."','".$payment_status."')");
		        $last_insert_id =mysqli_insert_id($conn);
		    }
		?>
			<div style="text-align: center;"><h1 style="background-color:#000000;color:white"> Your PayPal transaction has been suceeded. </h1></div>
		    <h1>Your Payment ID - <?php echo $last_insert_id; ?>.</h1>
		<?php
		}else{
		?>
			<div style="text-align: center;"><h1 style="background-color:#000000;color:white"> Your PayPal transaction has failed. </h1></div>
		<?php
		}
		?>
		<!--<?php #include 'temp/footer.php';  ?>-->
</body>
</html>