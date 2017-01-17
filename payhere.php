<?php
session_start(); ?>
<html>
    <head>
    <title>Reservation Form</title>

    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/menu/simple_menu.css">
    </head>
    <body>
        <?php include 'temp/header.php'; 

        require "dbcon/dbcon.php"; 
        $id=$_SESSION['no'];
        $sql = "SELECT * FROM reservations WHERE res_id=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        echo '<div id="par1" align="center" >';
        echo '<div id="par" align="center" > <br>';

        echo $row['cusname'] .'... You, selected: ';
        echo $row['packname'] . '<br>';

        #if (!$row['Remembrance_booklet'] == false)
        echo 'Remembrance booklet: ' . $row['Remembrance_booklet'] . '<br>';

        if (!($row['Floral_tributes'] == 'false'))
        echo 'Floral tributes <br>';

        if (!($row['Chairs_and_tents'] == 'false'))
        echo 'Chairs and tents <br>';

        if (!($row['Obituary_Notices'] == 'false'))
        echo 'Obituary_Notices <br>';

        if (!($row['Crematorium_booking'] == 'no'))
        echo 'Crematorium booking <br>';

        if (!($row['Monumental_plaques'] == 'false'))
        echo 'Monumental plaques <br>';

        if (!($row['Funeral_pyres'] == 'no'))
        echo 'Funeral pyres <br>';

        if (!($row['Web_casting'] == 'no'))
        echo 'Web casting <br>';

        if (!($row['Condolence_messeges'] == 'false'))
        echo 'Condolence_messeges <br>';

        echo 'Total: Rs. ' . $row['total']. '.00';

        echo '<br><br>';
        
       
        /*
          https://www.sandbox.paypal.com/cgi-bin/webscr  //sandbox api url
          maiperera93@gmail.com
          ammamagerajina<3

          jayaratnefuneraldirectors@gmail.com
          ucsc@123

          maiperera93-facilitator@gmail.com(buisiness)
          ucsc@123

          maiperera93-buyer@gmail.com(personal)
          ucsc@123
          Bank Account
          Account Number:
          60387364
          Routing Number:
          325272063
          Credit Card
          Credit Card Number:
          4032036726968108
          Credit Card Type:
          VISA
          Expiration Date:
          12/2021
          PayPal
         */
        ?>

          <div id="payHere">
          <table>  
              <tr>
                <td>
                <form action="payhere.php" method="POST">
                    <div id="ida"></div>
                </form>
                </td>
                <td>
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"><!--test paypal API URL-->

                  <!-- Identify your business so that you can collect the payments. -->
                  <input type="hidden" name="business" value="jayaratnefuneraldirectors@gmail.com"><!--Business email-->

                  <!-- Specify a Buy Now button. -->
                  <input type="hidden" name="cmd" value="_xclick">

                  <!-- Specify details about the item that buyers will purchase. -->
                  <input type="hidden" name="item_name" value="<?php echo $row['packname']; ?>">
                  <input type="hidden" name="amount" value="<?php echo sprintf("%.2f",($row['total']/50000)); ?>">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="reservation_id" value="<?php echo $row['res_id']; ?>">

                  <!-- Specify URLs -->
                  <input type='hidden' name='cancel_return' value='http://localhost/project/cancelpayment.php'>
                  <input type='hidden' name='return' value='http://localhost/project/paymentdone.php'>

                  <!-- Display the payment button. -->
                  <input type="image" name="submit" border="0"
                  src="https://www.surfaceskimmers.com/wp-content/uploads/2016/10/1431389879455.png" width="150" height="40"
                  alt="Buy Now">
                  <img alt="" border="0" width="0.5" height="0.5" 
                  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

                </form>
                </td>
           
            
             <td colspan="2" >
                  <input type="button" value="Cancle" name="cancle" onclick="document.location.href='/project/index.php'" >
            </td>
        </tr>
        </table>
        </div>
        </div>
        </div>
          
        <!-- include footer 
        <?php #include 'temp/footer.php';?>-->
    </body>
</html>