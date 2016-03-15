<?php
	
	include 'includes/config.php';
	
	function processContact()
	{
		$firstname = $_REQUEST['first-name'];
		$lastname = $_REQUEST['last-name'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$confirmEmail = $_REQUEST['confirmEmail'];
		$companyName = $_REQUEST['company'];
		$requestType = $_REQUEST['requestType'];
		$request = $_REQUEST['request'];
		if($_REQUEST['honeyPot'] == '')
		{
			if($firstname != '')
			{
				if($lastname != '')
				{
					if($email != '' && ($email == $confirmEmail))
					{
						if($phone != '')
						{
							mysql_connect(AGNSQL1_CONNECTION, AGNSQL1_USER, AGNSQL1_PASS);
							if(mysql_ping())
							{
								mysql_select_db(AGNSQL1_HOST);
								mysql_query("CALL usp_InsContactSubmission('$firstname', '$lastname', '$phone', '$email', '$companyName', $requestType, '$request')") or die("Query fail: " . mysql_error());
								
								$rows = mysql_affected_rows();
								if($rows > 0)
								{
									$to = SUPPORT_EMAIL;
									$subject = "AGN Support Request";
									$message = "First Name: ".$firstname.
									"\r\nLast Name: ".$lastname.
									"\r\nPhone: ".$phone.
									"\r\nEmail: ".$email.
									"\r\nRequest: ".$request;
									
									$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
									$headers = "From: ".$firstname.' '.$lastname.' '.'<'.$email.'>' . "\r\n";
									$headers .= 'Bcc: ' . ADMIN_EMAIL . "\r\n";
									
									mail($to,$subject,$message,$headers);
															
									$processMessage = "Success";
									return $processMessage;
								}
								else{
									//$processMessage = "There was an error submitting your request. Please try again.";
									return $processMessage;	
								}
								
								mysql_close();
							}
						}
						else
						{
							$processMessage = "Please enter a valid phone number.";
							return $processMessage;
						}
					}
					else
					{
						$processMessage = "Please provide a valid email and confirm that emails match.";
						return $processMessage;	
					}
				}
				else
				{
					$processMessage = "Please enter a lastname.";
					return $processMessage;
				}
			}
			else
			{
				$processMessage = "Please enter a firstname.";
				return $processMessage;
			}
		}
	}
	
?>