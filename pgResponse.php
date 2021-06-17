<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ProDocs | Thanks</title>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
	<style>
		body{
		background: #ffffff;
		background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
		height: 100%;
		margin: 0;
		background-repeat: no-repeat;
		background-attachment: fixed;
		}
		.wrapper-1{
			width:100%;
			height:100vh;
			display: flex;
			flex-direction: column;
		}
		.wrapper-2{
		  padding :30px;
		  text-align:center;
		}
		h1{
		  font-family: 'Kaushan Script', cursive;
		  font-size:4em;
		  letter-spacing:3px;
		  color:#001661 ;
		  margin:0;
		  margin-bottom:20px;
		}
		.wrapper-2 p{
		  margin:0;
		  font-size:1.3em;
		  color:#aaa;
		  /*font-family: 'Source Sans Pro', sans-serif;*/
		  letter-spacing:1px;
		}
		.go-home{
		  color:#fff;
		  background:#001661;
		  border:none;
		  padding:10px 50px;
		  margin:30px 0;
		  border-radius:30px;
		  text-transform:capitalize;
		  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
		}
		.footer-like{
		  margin-top: auto; 
		  background:#D7E6FE;
		  padding:6px;
		  text-align:center;
		}
		.footer-like p{
		  margin:0;
		  padding:4px;
		  color:#001661;
		  /*font-family: 'Source Sans Pro', sans-serif;*/
		  letter-spacing:1px;
		}
		.footer-like p a{
		  text-decoration:none;
		  color:#001661;
		  font-weight:600;
		}

		@media (min-width:360px){
		  h1{
		    font-size:4.5em;
		  }
		  .go-home{
		    margin-bottom:20px;
		  }
		}

		@media (min-width:600px){
		  .content{
		  max-width:1000px;
		  margin:0 auto;
		}
		  .wrapper-1{
		  height: initial;
		  max-width:620px;
		  margin:0 auto;
		  margin-top:50px;
		  box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
		} 
		}
	</style>
</head>
<body>

<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$con = mysqli_connect("localhost","root","","prodocs");
if (mysqli_connect_error()) {
    echo "DB cannot connect";
}else{}


if(isset($_POST) && count($_POST)>0){
	$result = mysqli_query($con,"INSERT INTO `order_details`(`id`, `order_id`, `currency`, `gateway_name`, `status`, `bank_name`, `payment_mode`, `MID`, `resp_code`, `TXNID`, `TXNAMOUNT`, `BANKTXNID`, `TXNDATE`, `CHECKSUMHASH`) VALUES ('','$_POST[ORDERID]','$_POST[CURRENCY]','$_POST[GATEWAYNAME]','$_POST[STATUS]','$_POST[BANKNAME]','$_POST[PAYMENTMODE]','$_POST[MID]','$_POST[RESPCODE]','$_POST[TXNID]','$_POST[TXNAMOUNT]','$_POST[BANKTXNID]','$_POST[TXNDATE]','$_POST[CHECKSUMHASH]')");
}

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		?>
		<div class=content>
			<div class="wrapper-1">
			    <div class="wrapper-2">
			    	<img src="images/header-logo.png" width="50%">
			      <h1>Order Placed !</h1>
			      <p>Thanks for placing order with us.  </p>
			      <p>you should receive your Kit very soon. </p>
			      <a href="index.php"><button class="go-home">go home</button></a>
			    </div>
			    <div class="footer-like">
			      <p>Also you will get a confirmation Email for the same.
			      </p>
			    </div>
			</div>
		</div>
		<?php
		// echo "<b>Transaction status is success</b>" . "<br/>";
	}
	else {
		?>
		<div class=content>
			<div class="wrapper-1">
			    <div class="wrapper-2">
			    	<img src="images/header-logo.png" width="50%">
			      <h1 style="color:red;">Order Failed !</h1>
			      <p>There is something wrong. please try again.</p>
			      <!-- <p>you should receive your Kit very soon. </p> -->
			      <a href="index.php"><button class="go-home">go home</button></a>
			    </div>
			    <div class="footer-like">
			      <p>You will get a Email for the same.
			      </p>
			    </div>
			</div>
		</div>
		<?php
		// echo "<b>Transaction status is failure</b>" . "<br/>";
	}
}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}
?>

</body>
</html>
