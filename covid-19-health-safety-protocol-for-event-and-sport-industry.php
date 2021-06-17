<?php
	include('layout.php');
	header_head();
	header_top();	
?>

	
  	

      

	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-home"style="background-image: url(images/blog2.jpg);">
		<div class="container text-center">
			<div class="row">
				<div class="ulockd-inner-conraimer-details">
					<div class="col-md-12">
						<h1 class="text-uppercase" style=" text-shadow: 2px 2px #000; color:#fff;">SarsCoV2/ Covid-19 Health Safety Protocol for Events and Sports Industry</h1>
					</div>
					<div class="col-md-12">
						<div class="ulockd-icd-layer">
							<div class="ulockd-icd-subtitle pull-left">SarsCoV2/ Covid-19 Health Safety Protocol for Event and Sport Industry </div>
							<ul class="list-inline ulockd-icd-sub-menu">
								<li><a href="#"> HOME </a></li>
								<li><a href="#"> > </a></li>
								<li> <a href="#"> SarsCoV2/ Covid-19 Health Safety Protocol for Events and Sports Industry  </a> </li>
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
			<style type="text/css">
			#div12 p
			{
				color:#000;
				font-size:18px;
			}
			</style>
			<div class="row">
				<div class="col-md-12" id="div12" style="font-size:18px; color:#000;">
				
				<!--
				<p style="text-align:center; font-size:22px; line-height:150%; margin-bottom:30px; font-weight:bold">
				SarsCoV2/ Covid-19 Health Safety Protocol for Events and Sports Industry</p>
				-->
				<DIV style="background:#f4364c; color:#fff; padding:10px; margin-bottom:20px; margin-top:-50px;">
			    <p style="font-size:20px; font-weight:bold; margin:0;  color:#fff; text-align:center;">WORLD IS OPENING UP</p>
			    </DIV>
				
				<p style="font-size:18px;">ProDocs Healthcare team is the pioneer of Health Risk Management (HRM) in India, providing the best Healthcare Services like Health Safety and Emergency Medical Services at events, and has earned many laurels in just a few years of its functioning.</p>
				<p style="font-size:18px;">Considering the current dynamic market and the prevailing pandemic Covid-19, the Team has devised HRM plans for the Event Industry. As the Government of India has recently announced the slow and gradual opening of events and sports with gatherings of 100 people or more, we have to act responsibly.</p>
				<p style="font-size:18px;">The devised plans have been inculcated by our team of Specialist Doctors and Healthcare professionals after careful understanding of the Covid-19 virus, its effect on human beings, modes of transmission, lifecycle and containment models, thus empowering us to successfully layout protocols which can help reduce, minimize and contain the exposure and spread of the virus.</p>
				<p style="font-size:18px;">These protocols, when executed onsite, provide an excellent set up for Health Security for all individuals at the Event site.</p>
				
				<p style="font-size:18px; font-weight:bold; text-align:center; margin-top:30px;">The Health Safety Protocols have been established following WHO and ICMR Covid-19 guidelines for sanitisation, testing, social distancing and&nbsp;followup.</p>
				
				<DIV style="background:#f4364c; color:#fff; padding:10px; margin-bottom:20px; margin-top:20px;">
			    <p style="font-size:20px; font-weight:bold; margin:0;  color:#fff; text-align:center;">SERVICES OFFERED</p>
			    </DIV>
				
				
				<ol style="list-style-type:disc; margin-left:20px;">
					<li>Health Status Online Registration and follow-up for all Event Team Members </li>
					<li>Health Safety Check at Entrance</li>
					<li>Onsite Testing Setup for Covid-19</li>
					<li>Isolation Centre Setup</li>
					<li>Covid 19 Post Exposure Management in case if anyone is found positive</li>
					<li>General Health facilities providing Health Safety and Emergency Medical Services for the patrons</li>
				</ol>

				<br/><br/>
				<DIV style="background:#f4364c; color:#fff; padding:10px; margin-bottom:20px; margin-top:20px;">
			    <p style="font-size:20px; font-weight:bold; margin:0;  color:#fff; text-align:center;">To consult about Event Health Risk Management (HRM) call us on @ 7259291899</p>
			    </DIV>
				

						
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