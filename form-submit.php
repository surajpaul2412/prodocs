<?php
if(isset($_REQUEST['submit']))
{
		if($_REQUEST['ftype']=='contact')
		{
			$subject = "Contact Inquiry Form submitted at Prodocs";
		}
		elseif($_REQUEST['ftype']=='join')
		{
			$subject = "Work with Us Form submitted at Prodocs";
		}
		$to="info@prodocs.co.in";
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		$headers .= 'From: <no-reply@prodocs.co.in>' . "\r\n";		
		// More headers
		$message = '<html><body>';
		$message .= '<h2>'.$subject.'</h2>';
		$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_REQUEST['uname']) . "</td></tr>";
		$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_REQUEST['uemail']) . "</td></tr>";
		$message .= "<tr><td><strong>Number:</strong> </td><td>" . strip_tags($_REQUEST['umobile']) . "</td></tr>";
		$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_REQUEST['umessage']) . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";
		
		if(mail($to, $subject, $message, $headers))
		{
		?>			
		<script type="text/javascript">
		alert('Message Submitted. We will get back to you soon.');
		window.location="index.php";
		</script>
		<?php
		
		} 
		else 
		{
		?>
		<script type="text/javascript">
		alert('Error Occured. Please try Again');
		window.location="index.php";
		</script>
		<?php					
		}
}
?>