<?php 		
	include "MIME.class";
								
	function send_rdml_email($email,$attachment) {
		$type = OCTET;
			
		$from = sprintf("%s <%s>","RDML","rdml@info.com");
		$body = "<html><body bgcolor='#ffffff' text='#000000'>"; // style='background-image:url(cid:background) top left repeat-x'
		$body .= "<p>Dear Sir/Madam,</p>";
		$body .= "<p>Your RDML file has been generated an can be found attached to this email.</p>";
		$body .= "<p>&nbsp;</p>";
		$body .= "<p>Thank you for using RDML,</p>";
		$body .= "<p>The RDML consortium</p>";
		$body .= "<p>&nbsp;</p>";
		$body .= "<p>------</p>";
		$body .= "<p>&nbsp;</p>";
		$body .= "<p>This is an 'outgoing only' email address. If you 'reply' to this message by simply selecting the reply button, we will not receive your message.</p>";
		$body .= "<p>This message was sent through the RDML website <a href='http://www.rdml.com'>http://www.rdml.com</a></p>";
		$body .= "</body></html>";			

		$email = new MIME_mail($from,$email,"RDML - file has been generated");
		$email->attach($body,"",HTML,BASE64);
		$email->fattach($attachment,"RDML file",$type);			
		$email->send_mail();
	}
?>