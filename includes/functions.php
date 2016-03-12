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
							mysql_connect(AGNSQL1_CONNECTION, AGNSQL1_USER, AGNQL1_PASS);
							if(mysql_ping())
							{
								mysql_select_db(FSSQL1_HOST);
								$result = mysql_query("CALL getAllInstructors()") or die("Query fail: " . mysql_error());
								
								return $result;
								
								mysql_close();
							}
				
							$rows = mysql_affected_rows();
							
							if($rows > 0)
							{
											
								if($contactMethod == '')
								{
									$contactMethod = 'n/a';	
								}
								
								$to = "info@ziondance.com";
								$subject = "Zion Inquiry";
								$message = "Booking: ".$booking.
								"\r\nProposed Date: ".$proposedDate.
								"\r\nPhone: ".$phone.
								"\r\nPrefered Contact Method: ".$contactMethod.
								"\r\nComments: ".$comments;
								
								$header = "From: ".$firstname.' '.$lastname.' '.'<'.$email.'>';
								
								mail($to,$subject,$message,$header);
														
								$processMessage = "Success";
								return $processMessage;
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
						$processMessage = "Please enter a valid email.";
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