
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


<?php
session_start();
include_once 'connect.php';
$name=$_SESSION['username'];
$id=$_SESSION['ID'];
$date = date('y/m/d');
$result = mysqli_query($conn,"SELECT * FROM addcart1  WHERE  username = '$name' AND LID = '$id'");

?>



<?php

require 'PHPMailerAutoload.php';


$result1 = mysqli_query($conn,"SELECT email,Fullname FROM customer_details  WHERE  username = '$name'");

$row = mysqli_fetch_array($result1);
$email=$row['email'];
$name=$row['Fullname'];
$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'prmaratha96k@gmail.com';                 // SMTP username
$mail->Password = 'pradyumna@9';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to 

$mail->setFrom('prmaratha96k@gmail.com', 'Pradyumna Gayake');
$mail->addAddress($email);     // Add a recipient


   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Booking Confirmation ';
$mail->Body    =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title></title>

</head>

<body>
    <div class="es-wrapper-color">
   
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table class="es-content esd-header-popover" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" esd-custom-block-id="88701" align="center">
                                        <table class="es-content-body" style="background-color: transparent;" width="600" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p5b es-p10r es-p10l" esd-general-paddings-checked="false" align="left">
                                                        <!--[if mso]><table width="580" cellpadding="0" cellspacing="0"><tr><td width="280" valign="top"><![endif]-->
                                                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                            <tbody>
                                                                <tr>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20b es-p20r es-p20l" esd-general-paddings-checked="false" style="background-color: #ffcc99;" bgcolor="#ffcc99" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="560" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-text es-p15t es-p15b" align="center">
                                                                                        <div class="esd-text">
                                                                                            <h2 style="color: #242424;"><span style="font-size:30px;"><strong>Your Order is confirmed. </strong></span><br></h2>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-text es-p10l" align="center">
                                                                                        <p style="color: #242424;">Hi  '.echo$name.', we"ve received Order Request  and are working on it now.<br></p>
                                                                                        <p style="color: #242424;">it.<br></p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p15t es-p10b es-p10r es-p10l" style="background-color: #f8f8f8;" esd-general-paddings-checked="false" bgcolor="#f8f8f8" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="580" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-text" align="center">
                                                                                        <h2 style="color: #191919;">Reservation deatils<br></h2>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p10t es-p10b es-p10r es-p10l" style="background-color: #f8f8f8;" esd-general-paddings-checked="false" bgcolor="#f8f8f8" align="left">
                                                        

                                                        
                                                        <center><h6>Thanks Regards ,Birtual restaurant </h6></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p15t es-p10b es-p10r es-p10l" style="background-color: #eeeeee;" esd-general-paddings-checked="false" bgcolor="#eeeeee" align="left">
                                                       
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                                <td style="border-bottom: 1px solid #191919; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;"></td>
                                                <tr>
                                                    <td class="esd-structure es-p25t es-p30b es-p20r es-p20l" esd-general-paddings-checked="false" style="background-color: #f8f8f8;" bgcolor="#f8f8f8" align="left">
                                                        <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="270" valign="top"><![endif]-->
                                                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="es-m-p20b esd-container-frame" width="270" align="left">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-text es-p10b" align="center">
                                                                                        <h3 style="color: #242424;">We"re here to help</h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-text" align="center">
                                                                                        <p style="line-height: 150%; color: #242424;">Call <a target="_blank" style="line-height: 150%; " href="tel:123456789">123456789</a> or <a target="_blank" href="https://viewstripo.email/">visit us online</a></p>
                                                                                        <p style="line-height: 150%; color: #242424;">for expert assistance.</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width="20"></td><td width="270" valign="top"><![endif]-->
                                                        <table class="es-right" cellspacing="0" cellpadding="0" align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="270" align="left">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-empty-container" align="center" style="display: none;"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-footer" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" esd-custom-block-id="88703" align="center">
                                        <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20" esd-general-paddings-checked="false" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="560" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                        
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="esd-footer-popover es-content" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" style="background-color: transparent;" width="600" cellspacing="0" cellpadding="0" align="center">
                                            
    </div>
</body>

</html>



<style type="text/css">
    /*
CONFIG STYLES
Please do not delete and edit CSS styles below
*/
/* IMPORTANT THIS STYLES MUST BE ON FINAL EMAIL */
#outlook a {
    padding: 0;
}

.ExternalClass {
    width: 100%;
}

.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
    line-height: 100%;
}

.es-button {
    mso-style-priority: 100 !important;
    text-decoration: none !important;
}

a[x-apple-data-detectors] {
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

.es-desk-hidden {
    display: none;
    float: left;
    overflow: hidden;
    width: 0;
    max-height: 0;
    line-height: 0;
    mso-hide: all;
}

[data-ogsb] .es-button {
    border-width: 0 !important;
    padding: 10px 20px 10px 20px !important;
}

/*
END OF IMPORTANT
*/
s {
    text-decoration: line-through;
}

html,
body {
    width: 100%;
    font-family: Arial, sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}

table {
    mso-table-lspace: 0pt;
    mso-table-rspace: 0pt;
    border-collapse: collapse;
    border-spacing: 0px;
}


/*
END RESPONSIVE STYLES
*/
</style>';

$mail->AltBody = 'Thanks Regards : Virtuals Hotels :)  ';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>





<div class="bill"  style="width: 600px;height: 700px; margin-left: 300px;margin-top: 200px;">

                                        
 <div class="card mb-3">
            <div class="card-header">
             
              <h5>Reservation Invoice</h5></div>
            <div class="card-body">
                <br>Invoice :<?php $No =1000; echo($No+$id); ?>  <br> <p>Date :<?php echo$date?></p></td>   
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sr No. </th>
                      <th>Item Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                  

                    </tr>
                  </thead>
             
                  <tbody> 
                   <?php
                    
                   $i=0;
                    $sum=0;

                            while($row = mysqli_fetch_array($result)) {
                                                        ?>
                                    <tbody>
                                                            <tr>
                                                           <th scope="row"><?php echo $i+1 ?></th>
                                                            <td> <?php echo $row["Name"]; ?></td>
                                                            <td> <?php echo $row["Quantity"]; ?></td>
                                                            <td> <?php echo $row["Price"]; ?></td>
                            
                                                            </tr>
                                                             <?php
                                                                $i++;
                                                              
                                                             
                                                                }

                                                               
                                                                ?>



                


                    </tr>
                  </tfoot>


                  </tbody>
                    
                      
                </table>
              </div>
            </div>
            
        </div>
         <div class="card-footer small text-muted"><h4>Thanks Your Reservation is Done</h4></div>
         <a type="button" class="btn btn-success " href="index1.php">Back To Home</a>
         <a type="button" class="btn btn-primary"style="margin-left: 50px;" href="index1.php">Done</a>


          </div>


</div>


