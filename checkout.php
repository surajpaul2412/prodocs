<?php
session_start();

if(!isset($_SESSION['checkouted'])){
    header("location: medikit.php");
}

$con = mysqli_connect("localhost","root","","prodocs");
if (mysqli_connect_error()) {
    echo "DB cannot connect";
}else{}

$date = date_create();
$c_date = date_format($date, 'Y-m-d H:i:s');

if(isset($_POST['cod-pay'])){
    $result = mysqli_query($con,"INSERT INTO `orders`(`id`, `order_id`, `customer_id`, `amount`, `username`, `email`, `mobile`, `address`, `landmark`, `state`, `city`, `pincode`, `created_at`, `updated_at`) VALUES ('','$_POST[ORDER_ID]','$_POST[CUST_ID]','$_POST[TXN_AMOUNT]','$_POST[NAME]','$_POST[EMAIL]','$_POST[MOBILE]','$_POST[ADDRESS]','$_POST[LANDMARK]','$_POST[STATE]','$_POST[CITY]','$_POST[PINCODE]','$c_date','$c_date')");

    // email after saving DB(COD)
    $to = "suraj.paul.69@gmail.com";
    $from = $_POST['EMAIL'];
    $first_name = $_POST['NAME'];
    $subject = "An order has been placed. ProDocs";
    $subject2 = "Your order has been placed. Thank You";
    $message = "Name = " . $first_name . "\nSubject = New order received. " . $_POST['ORDER_ID'] . "\ncheck more details in:" . "https://vlineinfotech.com/prodocs/demo/login/orders.php";
    $message2 = "Thank You." . $first_name . "\n\n" . "Your order has been placed. Your Order Id is: " . $_POST['ORDER_ID'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);


    if(!$result){
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }else{

        // email after saving DB(paytm)
        $to = "suraj.paul.69@gmail.com";
        $from = $_POST['EMAIL'];
        $first_name = $_POST['NAME'];
        $subject = "An order has been placed. ProDocs";
        $subject2 = "Your order has been placed. Thank You";
        $message = "Name = " . $first_name . "\nSubject = New order received. " . $_POST['ORDER_ID'] . "\ncheck more details in:" . "https://vlineinfotech.com/prodocs/demo/login/orders.php";
        $message2 = "Thank You." . $first_name . "\n\n" . "Your order has been placed. Your Order Id is: " . $_POST['ORDER_ID'];
    
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2);

        header("location:thanks.html");
    }
}

include('layout.php');
header_head();
header_top();

?>
<style>
  .py-5{
    padding-bottom: 3rem;padding-top: 0rem; 
  }
  .col-md-12, .col-md-4{
    margin-top: 15px;
  }
  .bold{
    font-weight: bold;
  }
  .text-info{
    color: #148ef0 !important;
  }
  .text-success{
    color: #4cae4c;
  }
</style>

  <div class="container py-5">
  <div class="row">
    <div class="col-md-3 col-12">
    </div>
    <div class="col-md-6 col-12">
      <div>
        <h2 class="text-info bold" align="center">Shipping Information</h2>
        <?php
         if (isset($_SESSION['cod'])) {
        ?>
            <form method="POST">
        <?php
         }else{
        ?>
            <form method="post" action="pgRedirect.php">
        <?php
         }
        ?>
            <div class="form-group m-auto"> 
                <div class="row">
             <div class="col-md-12">
                 <label for="">Name :</label>
                 <input type="text" name="NAME" class="form-control" placeholder="Enter your name" required>
             </div>
             </div>
             <div class="row">
                   <div class="col-12 col-md-12">
                      <label for="">Email :</label>
                      <input type="email" name="EMAIL" class="form-control" placeholder="Enter your email" required>
                   </div>
                   <div class="col-12 col-md-12">
                    <label for="">Mobile :</label>
                    <input type="number" name="MOBILE" class="form-control" placeholder="Mobile number" required>
                  </div>
             </div>
              <div class="row">
                    <div class="col-md-12 col-12">
                        <label for="">Address :</label>
                        <textarea class="form-control" name="ADDRESS" placeholder="Address" rows="4" required></textarea>
                    </div>
                    <div class="col-md-12 col-12">
                         <label for="">Landmark :</label>
                         <textarea class="form-control" name="LANDMARK" placeholder="Landmark" rows="2"></textarea>
                    </div>
              </div>
               <div class="row">
                   <div class="col-md-4 col-sm-12">
                      <label for="">State</label>
                       <input class="form-control" placeholder="state" name="STATE" type="text" required>
                   </div>
                    <div class="col-md-4 col-sm-12">
                        <label for="">city :</label>
                        <input class="form-control" placeholder="city" name="CITY" type="text" required>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label for="">Pincode :</label>
                        <input class="form-control" placeholder="pincode" name="PINCODE" type="number" required>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="hidden" class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                            name="ORDER_ID" autocomplete="off"
                            value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                    <input type="hidden" class="form-control" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo  "CUST" . rand(100,9999)?>">

                    <input type="hidden" class="form-control"  id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">

                    <input type="hidden" class="form-control" id="CHANNEL_ID" tabindex="4" maxlength="12"
                            size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">

                    <input class="form-control" title="TXN_AMOUNT" tabindex="10"
                    type="hidden" name="TXN_AMOUNT"
                    value="<?php
                        $value = 0;
                        if(isset($_SESSION['prod1'])){
                            $value = $_SESSION['prod1']+$value;
                        }
                        if(isset($_SESSION['prod2'])){
                            $value = $_SESSION['prod2']+$value;
                        }
                        if(isset($_SESSION['prod3'])){
                            $value = $_SESSION['prod3']+$value;
                        }
                        $value = $value*$_SESSION['qty'];
                        echo $value;
                     ?>">
                     <div><b>Total Amount:<span class="text-success"> INR. <?php echo $value;?> /-</span></b></div><br>
                     <!-- checkout check -->
                    <?php
                     if (isset($_SESSION['cod'])) {
                    ?>
                        <input class="btn btn-success" name="cod-pay" type="submit" value="Checkout Order">

                    <?php
                     }else{
                    ?>
                        <input class="btn btn-success" value="CheckOut" type="submit" onclick="">
                    <?php
                     }
                    ?>                    
                  </div>
                </div>
             </div>
            </div>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-12">
    </div>
  </div>
  </div>

<?php
footer();
?>