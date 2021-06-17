<?php
session_start();

if(!isset($_SESSION['checkouted'])){
    header("location: medikit.php");
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
</style>
 <div class="container" style="margin-top:80px;">
    <div class="panel panel-default">
        <div class="panel-body"> 
        <form method="post" action="pgRedirect.php">
            <h2 class="text-info bold" align="center">Shipping Information</h2>


<div class="form-group m-auto"> 
    <div class="row">
 <div class="col-md-12">
     <label for="">Name :</label>
     <input type="text" class="form-control" placeholder="enter your name">
 </div>
 </div>
 <div class="row">
       <div class="col-md-6 col-md-12">
          <label for="">Email :</label>
          <input type="email" class="form-control" placeholder="enter your email">
       </div>
       <div class="col-md-6 col-md-12">
        <label for="">Mobile :</label>
        <input type="number" class="form-control" placeholder="Mobile number">
      </div>
 </div>
  <div class="row">
        <div class="col-md-12">
            <label for="">Address :</label>
            <textarea class="form-control" name="address" placeholder="Address" rows="4"></textarea>
        </div>
        <div class="col-md-12">
             <label for="">Landmark :</label>
             <textarea class="form-control" name="landmark" placeholder="Landmark" rows="2"></textarea>
        </div>
  </div>
   <div class="row">
       <div class="col-md-4 col-sm-12">
          <label for="">State</label>
           <input class="form-control" placeholder="state" type="text">
       </div>
        <div class="col-md-4 col-sm-12">
            <label for="">city :</label>
            <input class="form-control" placeholder="city" type="text">
        </div>
        <div class="col-md-4 col-sm-12">
            <label for="">Pincode :</label>
            <input class="form-control" placeholder="pincode" type="number">
        </div>
    </div>












            <table border="1" class="table1">
                <tbody>
                    <tr>
                        <th>S.No</th>
                        <th>Label</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><label>ORDER_ID::*</label></td>
                        <td><input class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                            name="ORDER_ID" autocomplete="off"
                            value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><label>CUSTID ::*</label></td>
                        <td><input class="form-control" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo  "CUST" . rand(100,9999)?>"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><label>INDUSTRY_TYPE_ID ::*</label></td>
                        <td><input class="form-control"  id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><label>Channel ::*</label></td>
                        <td><input  class="form-control" id="CHANNEL_ID" tabindex="4" maxlength="12"
                            size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><label>txnAmount*</label></td>
                        <td>
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
                             echo $value;
                             ?>">
                             <div class="form-control"><?php echo $value;?></div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input class="btn btn-success" value="CheckOut" type="submit"   onclick=""></td>
                    </tr>
                </tbody>
            </table>
        </form>
        </div>
    </div>
  </div>

<?php
footer();
?>