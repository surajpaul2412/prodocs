<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<?php

if(isset($_POST['checkout'])){       
  session_start();
  $_SESSION['prod1']=$_POST['prod1'];
  $_SESSION['prod2']=$_POST['prod2'];
  $_SESSION['prod3']=$_POST['prod3'];
  $_SESSION['cod']=$_POST['cod'];
  $_SESSION['qty']=$_POST['qty'];
  $_SESSION['checkouted']="yes";
  header("location: checkout.php");
}

	include('layout.php');
	header_head();
	header_top();
?>

<style type="text/css">
.ul {
list-style: none !important;
}

.ul li:before {
content: '✓' !important;
}
	.ulockd-icd-sub-menu li a

	{
		color: #f4364c;

	}
	.ulockd-inner-home
	{
		/* background-color: #118def; */
		background-image: none;
		padding-top: 0px;
	}
	.medikit_new_banner
	{
		width: 100%;
		height: auto;
		position: relative;
	}
	.medikit_new_banner img
	{
		width: 100%;

		height: auto;

		position: relative;

		filter: contrast(1.2);

	}

	.medikit_title

	{

		width: 100%;

	}

	.medikit_title img

	{

		width: auto;

		height: 100%;

		max-height: 100px;

	}

	.medikit_sub_title

	{

		font-size: 1.5em;

		color: #fff;

		font-weight: bold;

		text-transform: none;

	}

	.symptoms_wrap h2

	{

		position: relative;

		font-size: 1.5em;

		margin: 20px 0px;

		padding:10px 0px 10px 10px;

		color: #FFF;

		font-weight: bold;

		background-color: #f4364c;

	}

	.symptom_item

	{

		position: relative;

		width: 100%;

		font-size: 16px;

		padding: 5px 0px;

		color: #313131;

		transition: 0.3s all ease;

		margin: 0px 0px 10px 0px;

	}

	.symptom_item:hover

	{

		color: #118def;

		cursor: pointer;

	}

	.symptom_item i

	{

		position: relative;

		font-size: 1.2em;

		text-align: center;

		padding: 5px 5px;

		margin-right: 10px;

		height: 30px;

		width: 30px;

		color: #fff;

		background-color: #118def;

		border-radius: 50%;

	}

	.medikit_image_wrap

	{

		max-height: 400px;

		width: 100%;

		/* background-color: lightgray; */

	}

	.medikit_image_wrap

	{

		max-height: 100%;

		width: 100%;

		overflow: hidden;

		/* background-color: lightgray; */

		transition: 0.3s all ease;

	}

	.medikit_image_wrap:hover

	{

		cursor: pointer;

		transform: translateY(-10px);

	}

	.medikit_image_wrap img

	{

		max-height: 100%;

		width: 100%;

	}

	.kit_img

	{

		border: 1px solid #f4364c;

	}

	.kit_row

	{

		margin: 20px 0px 20px 0px;

		/* border-top: 1px solid #118def; */

		padding-top:10px; 

	}

	.if_yes_wrap_col

	{

		position: relative;

		/* border: 1px solid #118def; */

	}

	.if_yes_wrap p

	{

		font-size: 1.2em;

		color: #313131;

		text-transform: none;

		text-align: justify;

	}

	.btn_wrap_pmt

	{

		margin: 30px 0px 0px 0px;

		position: relative;

		/* bottom: 0; */

		width: 100%;

	}

	.whatsap_wrap

	{

		position: relative;

		height: 50px;

		width: 100%;

		max-width: 350px;

		/* margin: 20px 0px; */

		background-color: #314E93;

		text-align: center;

		margin: 0 auto;

		transition: 0.3s all ease;

		box-shadow: 3px 3px 8px 0px black;

	}

	.whatsap_wrap a

	{

		color: #fff;

		font-size: 1.5em;

	}

	.whatsap_wrap:hover

	{

		cursor: pointer;

		background-color: #118def;

	}

	.whatsap_wrap img

	{

		position: relative;

		height: 100%;

		width: auto;

	}

	.upi_btn_wrap

	{

		position: relative;

		/* height: 50px; */

		width: 100%;

		padding: 7px 0px;

		max-width: 350px;

		/* margin: 20px 0px; */

		background-color: #314E93;

		text-align: center;

		margin: 0 auto;

		color: #fff;

		font-size: 1.5em;

		transition: 0.3s all ease;

		box-shadow: 3px 3px 8px 0px black;

	}

	.upi_btn_wrap:hover

	{

		cursor: pointer;

		background-color: #118def;

	}

	.upi_btn_wrap a

	{

		color: #fff;

		font-size: 0.8em;

	}

	.upi_wrap

	{

		position: relative;

		width: 100%;

		font-size: 16px;

		padding: 5px 0px;

		color: #313131;

		transition: 0.3s all ease;

		margin: 10px 0px 10px 0px;

	}

	.upi_wrap li

	{

		color: #118def;

		padding: 5px 0px;

	}

	.upi_wrap li a:hover

	{

		color: #118def;

	}

	.upi_wrap i

	{

		/* font-size: 14px; */

		margin-right: 10px;

	}

	.therapy_wrap h2

	{

		position: relative;

		font-size: 1.5em;

		margin: 20px 0px;

		padding:10px 0px 10px 10px;

		color: #FFF;

		font-weight: bold;

		background-color: #f4364c;

	}

	.therapy_new h2

	{

		position: relative;

		font-size: 1.2em;

		margin: 10px 0px;

		padding:8px 0px 8px 10px;

		color: #FFF;

		font-weight: bold;

		background-color: #118def;

	}

	.therapy_wrap ul li

	{

		position: relative;

		width: 100%;

		font-size: 16px;

		/* padding: 5px 0px; */

		color: #313131;

		transition: 0.3s all ease;

		margin: 0px 0px 10px 0px;

	}

	.therapy_wrap ul li i

	{

		color: #118def;

		font-size: 15px;

		position: relative;

		top: 1px;

	}

	.conatins_para

	{

		position: relative;

		width: 100%;

		font-size: 16px;

		padding: 5px 0px;

		color: #313131;

	}

	.conatins_para span

	{

		color: #000;

		font-weight: bold;

	}

	.thank_msg

	{

		position: relative;

		text-align: center;

	}

	.thank_msg h1

	{

		font-weight: 600;

		font-size: 2.5em;

		margin: 2px 0px 0px 0px;

		color: #118def;

	}

	.thank_msg .medikit_image_wrap

	{

		width: 100%;

		text-align: center;

		margin-top: 20px;

	}

	.thank_msg .medikit_image_wrap img

	{

		width: auto;

		height: 100%;

		max-height: ; 

	}

	.more_img_wrap

	{

		width: 100%;

		overflow: hidden;

		margin: 20px 0px 0px 0px;

		min-width: 150px;

		cursor: pointer;

	}

	.more_img_wrap img

	{

		width: 100%;

		height: auto;

		border: 1px solid #f4364c;

		transition: 0.3s all ease;

	}

	.more_img_wrap img:hover

	{

		transform: scale(1.1);

	}

	.modal_kit_img_wrap

	{

		position: relative;

		width: 100%;

		max-height: 500px;

		overflow: hidden;

		text-align: center;

	}

	.modal_kit_img_wrap img

	{

		position: relative;

		height: auto;

		width: auto; 

		border: 1px solid #f4364c;

	}

	.inr_badge

	{

		background-color: #118def;

		font-size: 14px;

	}

	.inr_badge .fa-inr

	{

		color: white;

		margin-right: 3px;

		font-size: 14px;

	}

	.shipping_badge

	{

		background-color: #f4364c;

		font-size: 14px;

		position: relative;

	}

	.shipping_badge .fa-inr

	{

		color: white;

		margin-right: 3px;

		font-size: 14px;

	}

	.kit_thumb_wrap

	{

		overflow: hidden;

		padding: 20px 0px;

	}

	.kit_thumb_img_wrap

	{

		position: relative;

		height: 115px;

		min-width: 115px;

		overflow: hidden;

		box-shadow: 8px 8px 10px 1px lightgray;

		width: auto;

		cursor: pointer;

		transition: 0.3s ease all;

		background-color: #fff;

	}

	.kit_thumb_img_wrap:hover

	{

		transform: scale(1.2);

	}

	.kit_thumb_img

	{

		min-width: 150px;

		width: 100%;

		height: auto;

		position: relative;

		left: 50%;		

		top:  50%;

		transform: translate(-50%, -50%);

	}

	.upi_icon

	{

		position: relative;

		max-width: 80px;

		top: -2px;

	}

	.get_in_touch_btn

	{

		position: relative;

		height: auto;

		width: auto;

		max-width: 600px;

		margin: 0 auto;

		text-align: center;

		background-color: #f4364c;

		display: block;

		color: #fff;

		font-size: 1.7em;

		padding: 10px 50px;

		cursor: pointer;

		border-radius: 10px;

	}

	.pro_desc_title

	{

		margin: 50px 0px;

	}

	.pro_desc_wrap

	{

		color :#000;

		font-size: 1.1em !important;

	}

	.pro_desc_wrap ul

	{

		margin-left: 20px;

	}

	.pro_desc_wrap ul li::before

	{

		content:url('images/list_icon.png');

		margin-left:0px;

		height: 5px !important;

		transform: rotate(45deg);

		display:inline-block;

		/* list-style-image: url('); */

	}

	.kit_price_wrap

	{

		width: 100%;

	}

	.kit_price_check

	{

		display: inline-block;

		position: relative;

		top: -15px;

		width: 8%;

	}

	.kit_price_span

	{

		padding: 0px 0px 0px 00px;

		display: inline-block;

		color: #000;

		width: 88%;

	}

	.kit_price_span span

	{

		position: relative;

		color: #314E93;

		/* padding: 0px 0px 0px 30px; */

	}

	.kit_price_last

	{

		top: -35px;

	}

	.qty_cal

	{

		position: relative;

		display: block;

		width: 100%;

		padding: 0px 0px 0px 50px;

	}

	.qty_elem {

    display: inline-block;

}

	.qty_btn {

    width: 40px;

    height: 40px;

    text-align: center;

    margin: auto;

    padding: 0;

    cursor: pointer;

    border: none;

    /* border: 2px solid #314E93; */

    font-size: 24px;

    font-weight: normal;

    background-color: #fff;

    position: relative;

    color: #000;

}

.qty_btn_wrap

{

	position: relative;

	display: inline-block;

	margin: 0px 0px 0px 50px;

	box-shadow: 5px 5px 10px 1px lightgray;

}

.qty_title

{

	display: inline-block;

	font-size: 1.5em;

	font-weight: bold;

	color: #000;

}

.quantity_input {

    position: relative;

    width: 50px;

    font-size: 18px;

    height: 40px;

    text-align: center;

    padding: 0;

    cursor: text;

    border: none;

    /* border: 2px solid #314E93; */

    font-weight: normal;

    background-color: #fff;

    top: -1px;

    color: #000;

	    }

	    input::-webkit-outer-spin-button,

input::-webkit-inner-spin-button {

  -webkit-appearance: none;

  margin: 0;

}

.price_info

{

	margin-left: 20px;

	position: relative;

	padding: 2px 5px 2px 4px;

	color: #fff !important;

	border-radius: 20%;

	font-size: 12px !important;

	background-color: #f4364c;

	cursor: pointer;

}

.kit_thumb_active

{

	border: 1px solid black;

}

.tooltip-inner {

		    text-align: left;

		}

@media only screen and (max-width:480px)

{

	.get_in_touch_btn

	{

		font-size: 1.2em;

		padding: 10px 10px;

	}

	.kit_thumb_img_wrap

	{

		position: relative;

		height: 5em;

		min-width: 5em;

	}

	

 }

 

 #paydesktop{

		display:block;

	}



	#paymobile

	{

		display:none;

	}



	@media only screen and (max-width: 600px) {

		#paydesktop{

		display:none;

	}



	#paymobile

	{

		display:block;

	}
	}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />



	<!-- Home Design Inner Pages -->



	<div class="medikit_new_banner">

		<img src="images/new_ban_desk.jpg" class="medikit_banner_img">

	</div>

	<!-- Inner Pages Main Section -->

<form method="POST">
	<section class="ulockd-contact-page" style="padding:30px 0px">

		<div class="container">

			<div class="row kit_row">

				<div class="col col-md-6"data-aos="fade-right"data-aos-duration="1000">

					<div class="medikit_image_wrap">

						<img src="images/kit_more/3.png" class="kit_img">

					</div>

					<div class="kit_thumb_wrap">

						<div class="row owl-carousel">

							<div class="col col-md-3">

								<div class="kit_thumb_img_wrap">

									<img src="images/kit_more/1.png" class="kit_thumb_img">

								</div>

							</div>

							<div class="col col-md-3">

								<div class="kit_thumb_img_wrap kit_thumb_active">

									<img src="images/kit_more/3.png" class="kit_thumb_img">

								</div>

							</div>

							<div class="col col-md-3">

								<div class="kit_thumb_img_wrap">

									<img src="images/kit_more/4.png" class="kit_thumb_img">

								</div>

							</div>

							<div class="col col-md-3">

								<div class="kit_thumb_img_wrap">

									<img src="images/kit_more/2.png" class="kit_thumb_img">

								</div>

							</div>

						</div>

					</div>

					<div class="col col-md-12"data-aos="fade-up"data-aos-duration="1000">

						<p class="conatins_para">

							<span>* Also Available At A Pharmacy Near You</span>

						</p>

					</div>

				</div>

				<div class="col col-md-6 if_yes_wrap_col"data-aos="fade-left"data-aos-duration="1000">

					<div class="if_yes_wrap">

						<p style="color: #000;text-align: left;">

							<p>

								<strong>Dr. MediKit - </strong> Your Body Strength & Immunity Essentials 

								Contains Vitamin C, Vitamin D, Vitamin E, Zinc, 

								Multivitamin & Pre Pro Biotics In The Form Of 

								Tablets, Capsules & Sachets.

							</p>

						</p>

						<div>

							<div class="row">

								<div class="col col-md-12">

									<div class="form-group">

										<label class="kit_price_wrap">
											<input type="checkbox" name="prod1" class="kit_price_check product-item" value="334">
											<span class="kit_price_span">
												10 Days Therapy MediKit 
												<br>
                          <span>Rs. 334.00</span>
                          &nbsp;
                          <span data-html="true" title="Cost - Rs. 250.00<br> CGST 9% - Rs. 22.50 <br> SGST 9% - Rs. 22.50<br>Shipping Fee - Rs. 39.00<br>Total - Rs. 334" class="price_info">
													<i class="fa fa-inr"></i>
												</span>
                          &nbsp;
                          <span data-html="true" title="Vitamin C x 1 strip <br> Vitamin E x 1 strip <br> Zinc x 1 strip <br> Multivitamin x 1 strip <br> Pre Pro Biotics x 1 strip <br> Vitamin D3 x 3 Sachets  <br> with <br> Dosage Card" class="price_info" style="margin-left:5px;">
													<i class="fa fa-info"></i>
												</span>
											</span>
											<div style="padding-left: 45px;padding-top: 10px;color:#000;font-weight: 200;">Shipping Charges Extra</div>
										</label> 

									</div>

								</div>

								<div class="col col-md-12">

									<div class="form-group">

										<label class="kit_price_wrap">

											<input type="checkbox" name="prod2" class="kit_price_check product-item" value="708">

											<span class="kit_price_span">

												30 Days Therapy MediKit 

												<br><span>Rs. 708.00</span>&nbsp;<span data-html="true" title="Cost - Rs. 600.00<br>CGST 9% - Rs. 54.00<br>SGST 9% - Rs. 54.00<br>Shipping Fee - Rs. 0.00<br>Total - Rs. 708.00" class="price_info">

																							<i class="fa fa-inr"></i>

																					</span>
                                                &nbsp;
                                                <span data-html="true" title="Vitamin C x 3 strips <br> Vitamin E x 3 strips <br> Zinc x 3 strips <br> Multivitamin x 3 strips <br> Pre Pro Biotics x 3 strips <br> Vitamin D3 x 9 Sachets <br> with <br> Dosage Card & Free  KN95 Mask & Sanitizer" class="price_info" style="margin-left:5px;">
													<i class="fa fa-info"></i>
												</span>
											</span>
											<div style="padding-left: 45px;padding-top: 10px;color:#000;font-weight: 200;">Free Shipping</div>
										</label> 

									</div>

								</div>

								<div class="col col-md-12">

									<div class="form-group">

										<label class="kit_price_wrap">

											<input type="checkbox" name="prod3" class="kit_price_check kit_price_last product-item" value="482">

											<span class="kit_price_span">

												20 Days Refill Therapy (Available after purchase of 10 Days & 30 Days Therapy MediKit)

												<br><span>Rs. 482.00</span>	&nbsp;<span data-html="true" title="Cost - Rs. 375.00<br>CGST 9% - Rs. 33.75 <br>SGST 9% - Rs. 33.75<br>Shipping Fee - Rs. 39.00<br>Total - Rs. 482.00" class="price_info">

																							<i class="fa fa-inr"></i>

												</span>
                              &nbsp;
                              <span data-html="true" title="Vitamin C x 2 strips<br> Multivitamin x 2 strips<br>Vitamin E x 2 strips<br>Pre Pro Biotics x 2 strips<br>Zinc x 2 strips<br>Vitamin D3 x 6 Sachets" class="price_info" style="margin-left:5px;">
													<i class="fa fa-info"></i>
												</span>
											</span>
											<div style="padding-left: 45px;padding-top: 10px;color:#000;font-weight: 200;">Shipping Charges Extra</div>
										</label> 
									</div>
								</div>

								<div class="col-md-3 col"></div>
								<div class="col-md-6 col" style="display: flex;">
									<label style="padding-top: 10px;">Quantity : </label>

									<div style="margin-left: 20px;padding: 6px 10px;box-shadow: 1px 1px 5px 1px #ccc;">
										<a class="decrement" style="cursor:pointer;"><i class="fa fa-minus"></i></a>
											<input class="counter" name="qty" type='number' style="width:60px;text-align: center;border: none;">
										<a class="increment" style="cursor:pointer;"><i class="fa fa-plus"></i></a>
									</div>
								</div>
								<style type="text/css">
								:focus-visible {
								    outline: none !important;
								}
								</style>
								<div class="col-md-3 col"></div>

								<div class="col col-md-12">
									<div class="form-group">
										<label class="kit_price_wrap">
											<span class="kit_price_span" style="padding-top: 25px;text-align: left !important;font-size: 1.5em">
												<input type="checkbox" name="cod" class="" value="yes"> Pay On Delivery
											</span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-12" align="center">
								<button name="checkout" class="btn btn-primary w-100 submit-btn" style="padding: 15px 24px;background: #001661;" disabled>
									Proceed to Checkout
								</button>
							</div>
						</div>

						<div class="btn_wrap_pmt">

							<div class="upi_wrap" data-aos="fade-up"data-aos-duration="1000" id="paymobile">

								<div class="upi_btn_wrap">

									

									<a type="submit" class="upi-pay1" class="btn btn-outline-success">

										PAY VIA

										<img src="images/upi1.png" class="upi_icon">

									</a>
									<button class="btn btn-success">test</button>

								</div>

							</div>							

							<br>

							<p class="d-block text-center" style="width: 100%;text-align: left !important;font-size: 1.5em">

								<!-- <b> Cash On Delivery Available for Doorstep Delivery</b> -->

								<br>
							</p>

						</div>

					</div>

				</div>

			</div>

			<div class="row">

				<div class="col col-md-12">
					<a href="https://api.whatsapp.com/send?phone=919555736036" target="_blank">
					<div class="get_in_touch_btn">
						<span>GET IN TOUCH WITH OUR HEALTH EXPERT</span>
						<br>
						<b>CLICK HERE <img src="images/whtsap_icon.png" width="50px" style="padding-left: 15px;"></b>
					</div>
					</a>

				</div>

			</div>

			<div class="row">

				<div class="col col-md-12 text-center">

					<h2 class="pro_desc_title">PRODUCT DESCRIPTION</h2>

				</div>

			</div>

			<div class="row">

				<div class="col col-md-6"data-aos="fade-right"data-aos-duration="1000">

					<div class="medikit_image_wrap">

						<img src="images/kit2.png">

					</div>

				</div>

				<div class="col col-md-6"data-aos="fade-left"data-aos-duration="1000">

					<div class="pro_desc_wrap">

						<div>

							ProDocs MediKit is the first one of its kind in the Industry as its contents 

							& compositions are hand-selected by our Healthcare Specialists 

							after careful research and analysis to help fortify the Body Strength 

							& Immunity.

						</div>

						<br>

						<div>

							<b>Benefits:</b>

							<ul class="ul">

								<li>
									Boosts Body Strength & Immunity
								</li>
								<li>
									Protects Body Against Infections (Viral, Bacterial or Fungal)
								</li>

						      	<li>

						      		Improves Concentration, Memory & Alertness

						      	</li>

						      	<li>

						      		Maintains Bone health, Blood circulation & Liver function

						      	</li>

						      	<li>

						      		Reduces Generalized Weakness, Lethargy & Stress 

						      	</li>

						      	<li>

						      		Manages Blood Sugar Levels

						      	</li>

						      	<li>

						      		Aids In Physical & Mental Growth

						      	</li>

						      	<li>

						      		Improves Skin & Hair Health 

						      	</li>

						      	<li>

						      		Fights Aging

						      	</li>

						      	<li>

						      		Helps Speed up Recuperation Process In Post Surgery & Hospital Discharge Cases

						      	</li>

						      	<li>

						      		Maintains Proper Functioning of All Organs & Systems

						      	</li>
						      	<li>
						      		Supplement for Fitness Enthusiasts
										</li>
							</ul>

						</div>

					</div>

				</div>

			</div>

			<br>

			<div class="row more_img_wrap_par" style="display: none;">

				<div class="col col-md-2"data-aos="fade-up"data-aos-duration="1000">

					<div class="more_img_wrap">

							<img src="images/3.jpeg" class="medkit_mor_img">

					</div>

				</div>

				<div class="col col-md-2"data-aos="fade-up"data-aos-duration="1000">

					<div class="more_img_wrap">

							<img src="images/4.jpeg" class="medkit_mor_img">

					</div>

				</div>

				<div class="col col-md-2"data-aos="fade-up"data-aos-duration="1000">

					<div class="more_img_wrap">

							<img src="images/6.jpeg" class="medkit_mor_img">

					</div>

				</div>

				<div class="col col-md-2"data-aos="fade-up"data-aos-duration="1000">

					<div class="more_img_wrap">

							<img src="images/5.jpeg" class="medkit_mor_img">

					</div>

				</div>

				<div class="col col-md-2"data-aos="fade-up"data-aos-duration="1000">

					<div class="more_img_wrap">

							<img src="images/7.jpeg" class="medkit_mor_img">
					</div>
				</div>
				<div class="col col-md-2"data-aos="fade-up"data-aos-duration="1000">
					<div class="more_img_wrap">
							<img src="images/2.jpeg" class="medkit_mor_img">
					</div>
				</div>
			</div>
			
		</div>
	</section>
</form>
<!-- new section -->
			<div class="" style="background-color:#F2F1F1;padding: 30px 50px;">
				<div class="" style="background:#fff;">
					<div class="row">
						<div class="col-md-3 col-12" align="center" style="padding-top: 60px;padding-bottom: 40px;">
							<div style="border-right: 2px solid #F2F1F1;">
								<img src="images/icon/1 (1).png"><br><br>100% Payment Protection
							</div>
						</div>
						<div class="col-md-3 col-12" align="center" style="padding-top: 50px;padding-bottom: 40px;">
							<div style="border-right: 2px solid #F2F1F1;">
							<img src="images/icon/1 (2).png"><br><br>
							Cash on Delivery
						</div>
						</div>
						<div class="col-md-3 col-12" align="center" style="padding-top: 50px;padding-bottom: 40px;">
							<div style="border-right: 2px solid #F2F1F1;">
							<img src="images/icon/1 (3).png"><br><br>
							Get In Touch with our<br>Health Expert
						</div>
						</div>
						<div class="col-md-3 col-12" align="center" style="padding-top: 40px;padding-bottom: 40px;">
							<img src="images/icon/1 (4).png"><br><br>
							Help Center<br>
							Call: <a href="tel:7755888611">+91-77558 88611</a> or <br>Mail: <a href="mailto:info@prodocs.co.in">info@prodocs.co.in</a>
						</div>
					</div>
				</div>
			</div>

<?php

footer();

?>

	

	<!-- Modal -->

<div id="payment-modal" class="modal fade" role="dialog">

  <div class="modal-dialog" style="max-width:95%;">



    <!-- Modal content-->

    <div class="modal-content">

	

	<img  src="images/Prodocs-Healthcare-Prodocs-Q11694749@ybl.jpg" />

    

	</div>



  </div>

</div>



<div id="medikit_modal" class="modal fade" role="dialog">

  <div class="modal-dialog">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-body">

      	<div class="modal_kit_img_wrap">

      		<img src="">

      	</div>

      </div>

    </div>

  </div>

</div>



<div id="help_modal" class="modal fade" role="dialog">

  <div class="modal-dialog">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">ProDocs Health Expert</h4>

      </div>

      <div class="modal-body" style="overflow: hidden;">

      	

      	<!-- <div class="container"> -->

            <div class="row">

              <div class="col col-md-12"> 

                <div class="form-group">

                  <label><span class="form_mandet_icon">*</span> Enter Full Name</label>

                  <input type="text" class="form-control" name="name" required="" pattern="[a-zA-Z ]+">

                </div>

              </div>

              <div class="col col-md-12"> 

                <div class="form-group">

                  <label><span class="form_mandet_icon">*</span> Enter Email</label>

                  <input type="email" class="form-control" name="email" required="">

                </div>

              </div>

              <div class="col col-md-12"> 

                <div class="form-group">

                  <label><span class="form_mandet_icon">*</span> Enter Mobile Number</label>

                  <input type="text" class="form-control" name="contact" minlength="10" maxlength="10" pattern="[0-9]+" required="">

                </div>

              </div>

              <div class="col col-md-12"> 

                <div class="form-group">

                  <label><span class="form_mandet_icon">*</span> Enter Address</label>

                  <textarea rows="3" class="form-control" name="address" pattern="[a-zA-z0-9 ]+"></textarea>

                </div>

              </div>

              <div class="col col-md-12 text-center"> 

                <div class="form-group">

                  <hr>

                  <input type="hidden" name="nirf_2021_submit">

                  <button type="submit" class="btn btn-success submit_btn">Send</button>

                  &nbsp;&nbsp;

                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>

              </div>

            </div>
          <!-- </div> -->
      </div>
    </div>
  </div>
</div>



<!-- try -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
	var value = 1;
$(".counter").val(value);
$('.increment').on("click", function() {
  value = parseInt(value+1);
  $(".counter").val(value);
});
$('.decrement').on("click", function(){
  if(value > 1){
    value = parseInt(value-1);
    $(".counter").val(value);
  }else{
    value = 1;
    $(".counter").val(value);
  }
});
</script>
<!-- try end -->
<script>
var checkboxes = $(".product-item"),submitButt = $(".submit-btn");
checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
});
</script>

<!-- Wrapper End -->

<script type="text/javascript" src="js/jquery-1.12.4.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/bootsnav.js"></script>

<script type="text/javascript" src="js/parallax.js"></script>

<script type="text/javascript" src="js/scrollto.js"></script>

<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>

<script type="text/javascript" src="js/gallery.js"></script>

<script type="text/javascript" src="js/wow.min.js"></script>

<script type="text/javascript" src="js/slider.js"></script>

<script type="text/javascript" src="js/video-player.js"></script>

<!-- Custom script for all pages --> 



<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/script.js"></script>

<script>

	$(document).ready(function()

	{

		$(".owl-carousel").owlCarousel(

			{

				items:4, 

				nav: true,

     			// navigationText: ["<span>Hi</span>", "<span>Bi</span>"]

			});

		$('[data-toggle="tooltip"]').tooltip();

		$(".price_info").hover(function()

		{

			$(this).tooltip('show');

		});

		$(".price_info").click(function()

		{

			var parent_check = $(this).parents(".kit_price_wrap").find("input").prop("checked");

			if(parent_check)

			{

				parent_check = false;

			}

			else

			{

				parent_check = true;

			}

			$(this).parents(".kit_price_wrap").find("input").prop("checked",parent_check);

			$(this).tooltip('show');

		});







		if($(window).width()<=420)

		{

			$(".medikit_banner_img").attr("src","images/new_ban_mob.jpg");

		}

		else

		{

			$(".medikit_banner_img").attr("src","images/new_ban_desk.jpg");

		}

		// $(".get_in_touch_btn").click(function()

		// {

		// 	$("#help_modal").modal(100);

		// });

	});

</script>

<script>

	$(document).ready(function()

	{

		$(".kit_thumb_img_wrap").click(function()

		{

			var img = $(this).find("img").attr("src");

			$(".kit_thumb_img_wrap").removeClass("kit_thumb_active");

			$(this).addClass("kit_thumb_active");

			$(".kit_img").attr("src",img);

		});

		$(".medkit_mor_img").click(function()

		{

			$(".modal_kit_img_wrap img").attr("src",$(this).attr("src"));

			$("#medikit_modal").modal(100);

		});

	});

</script>

<script>

    function quantity(value)

    {

        var min_val = parseInt(1);

        var current_value = parseInt($("#quantity_input").val());

        if(value===1)

        {

            $("#quantity_input").val(current_value+parseInt(value));

        }

        else if(value === -1 && current_value>min_val)

        {

            $("#quantity_input").val(current_value+parseInt(value));

        }

        else if(value<1)

        {

        	$("#quantity_input").val(min_val);

        }         

    }

    $("#quantity_input").blur(function()

	{

		quantity($(this).val());	

	});

</script>