<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

$NAME = $_POST["NAME"];
$EMAIL = $_POST["EMAIL"];
$MOBILE = $_POST["MOBILE"];
$ADDRESS = $_POST["ADDRESS"];
$LANDMARK = $_POST["LANDMARK"];
$STATE = $_POST["STATE"];
$CITY = $_POST["CITY"];
$PINCODE = $_POST["PINCODE"];

if(isset($_POST['NAME'])){

$con = mysqli_connect("localhost","root","","prodocs");
if (mysqli_connect_error()) {
    echo "DB cannot connect";
}else{}

$date = date_create();
$c_date = date_format($date, 'Y-m-d H:i:s');

	$result = mysqli_query($con,"INSERT INTO `orders`(`id`, `order_id`, `customer_id`, `amount`, `username`, `email`, `mobile`, `address`, `landmark`, `state`, `city`, `pincode`, `created_at`, `updated_at`) VALUES ('','$_POST[ORDER_ID]','$_POST[CUST_ID]','$_POST[TXN_AMOUNT]','$_POST[NAME]','$_POST[EMAIL]','$_POST[MOBILE]','$_POST[ADDRESS]','$_POST[LANDMARK]','$_POST[STATE]','$_POST[CITY]','$_POST[PINCODE]','$c_date','$c_date')");
}

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];

// Create an array having all required parameters for creating checksum.


$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["CALLBACK_URL"] = "https://localhost/prodocs/pgResponse.php";

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="NAME" value="<?php echo $NAME ?>">
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>