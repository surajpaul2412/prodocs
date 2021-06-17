<?php
	include('layout.php');
	header_head();
	header_top();	
?>

	
  	

      

	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-home">
		<div class="container text-center">
			<div class="row">
				<div class="ulockd-inner-conraimer-details">
					<div class="col-md-12">
						<h1 class="text-uppercase">CONTACT US</h1>
					</div>
					<div class="col-md-12">
						<div class="ulockd-icd-layer">
							<div class="ulockd-icd-subtitle pull-left">CONTACT US</div>
							<ul class="list-inline ulockd-icd-sub-menu">
								<li><a href="#"> HOME </a></li>
								<li><a href="#"> > </a></li>
								<li> <a href="#"> CONTACT US </a> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Inner Pages Main Section -->
	<section class="ulockd-contact-page">
		<div class="container">
			<!--
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="ulockd-cp-title">
						<h2 class="text-uppercase">CONTACT US</h2>
					</div>
					
				</div>
			</div>
			-->
			<div class="row">
				<div class="col-md-5" style="font-size:18px;">
						<span class="flaticon-map-marker" style="font-size:40px; color:#000;"></span><br/>
						
						Prodocs Healthcare<br/>
						15/58, (6) Friends Enclave,<br/> Civil Lines, Kanpur, U.P. - 208001, India<br/><br/>

						<span class="flaticon-black-back-closed-envelope-shape" style="font-size:40px; color:#000;"></span><br/>
						info@prodocs.co.in<br/><br/>
						
						<span class="flaticon-old-handphone" style="font-size:40px; color:#000;"></span><br/>
						+91 7755888611<br/>
						+91 7259291899
				</div>
				<div class="col-md-7">
					<div class="ulockd-contact-form">
                        <form id="contact_form" name="contact_form" class="contact-form" action="form-submit2.php" method="post">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" name="uname" class="form-control ulockd-form-fg required" placeholder="Your name" required="required" data-error="Name is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" name="uemail" class="form-control ulockd-form-fg required email" placeholder="Your email" required="required" data-error="Email is required." type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <input id="form_phone" name="umobile" class="form-control ulockd-form-fg required" placeholder="Phone" required="required" data-error="Phone Number is required." type="text">
	                                    <div class="help-block with-errors"></div>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <input id="form_subject" name="usubject" class="form-control ulockd-form-fg required" placeholder="Subject" required="required" data-error="Subject is required." type="text">
	                                    <div class="help-block with-errors"></div>
	                                </div>
	                            </div>
                                <div class="col-md-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="umessage" class="form-control ulockd-form-tb required" rows="8" placeholder="Your message" required="required" data-error="Message is required."></textarea>
		                                <div class="help-block with-errors"></div>
		                            </div>
		                            <div class="form-group ulockd-contact-btn">		                                
		                                <button type="submit" class="btn btn-default ulockd-btn-thm" data-loading-text="Getting Few Sec..." name="submit">SUBMIT</button>
		                            </div>
                                </div> 
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>


	
	<?php
	footer();
	?>
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
<!-- Google Map Javascript Codes -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
<script src="js/googlemaps.js"></script>
<!-- Custom script for all pages --> 
<!-- Custom script for all pages --> 

<script type="text/javascript" src="js/script.js"></script>

<!-- Contact Form Validation-->
<script type="text/javascript">
	// https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form
	$(function () {
	    $('#contact_form').validator();
	    $('#contact_form').on('submit', function (e) {
	        if (!e.isDefaultPrevented()) {
	            var url = "#";
	            $.ajax({
	                type: "POST",
	                url: url,
	                data: $(this).serialize(),
	                success: function (data)
	                {
	                    var messageAlert = 'alert-' + data.type;
	                    var messageText = data.message;

	                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
	                    if (messageAlert && messageText) {
	                        $('#contact_form').find('.messages').html(alertBox).fadeIn('slow');
	                        $('#contact_form')[0].reset();
	                        setTimeout(function(){ $('.messages').fadeOut('slow') }, 6000);
	                    }
	                }
	            });
	            return false;
	        }
	    })
	});
</script>