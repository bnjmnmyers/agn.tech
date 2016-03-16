<?php
	include 'includes/functions.php';
	$firstname = $_REQUEST['first-name'];
	$lastname = $_REQUEST['last-name'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$confirmEmail = $_REQUEST['confirmEmail'];
	$companyName = $_REQUEST['company'];
	$requestType = $_REQUEST['requestType'];
	$request = $_REQUEST['request'];
	if($_REQUEST['send'])
	{
		$processMessage = processContact();
		
		if($processMessage == 'Success')
		{				
			$firstname = '';
			$lastname = '';
			$phone = '';
			$email = '';
			$confirmEmail = '';
			$companyName = '';
			$requestType = '';
			$request = '';
		}
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alchemy Global Networks | Home</title>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/contact.css" rel="stylesheet" />
    <?php include("includes/scriptIncludes.php"); ?>
</head>

<body>
	<div class="container-fluid">
    	<?php include('includes/header.php') ?>
        <div id="page-title" class="row">
        	<h1>Contact</h1>
        </div>
        <div id="content-wrapper" class="row">
            <div id="contact-blurb" class="col-md-10">
                <p>Your journey toward a more secure, robust, and functional network begins with a first step. Whether you need a quick answer to your urgent support needs or a long-term staff augmentation, the engineers at Alchemy Global Networks are here to help.</p>
    
                <p>Complete the form below to learn more and get started. We’ll be in touch promptly with answers to your burning questions and information about the next steps.</p>
            </div>
            <div id="contact-box" class="col-md-10">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3220.6215749889934!2d-83.39675594952669!3d36.17576231020149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885b918e86df42b7%3A0xc7e48531e5f013cd!2s6057+W+Andrew+Johnson+Hwy+%232%2C+Talbott%2C+TN+37877!5e0!3m2!1sen!2sus!4v1458168431068" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <?php
                if($processMessage != 'Success')
                {		
            ?>		<span class="error"><?php echo $processMessage; ?></span>
                    <form method="post" action="contact.php">
                        <input type="hidden" name="honeyPot" value="" />
                        <div class="col-md-10">
                            <div class="input-row">
                                <input type="text" name="first-name" placeholder="First Name*" value="<?php echo $firstname; ?>" />
                            </div>
                            <div class="input-row">
                                <input type="text" name="last-name" placeholder="Last Name*" value="<?php echo $lastname; ?>" />
                            </div>
                            <div class="input-row">
                                <input type="text" name="phone" placeholder="Phone*" value="<?php echo $phone; ?>" />
                            </div>
                            <div class="input-row">
                                <input type="text" name="email" placeholder="Email*" value="<?php echo $email; ?>" />
                            </div>
                            <div class="input-row">
                                <input type="text" name="confirmEmail" placeholder="Confirm Email*" value="<?php echo $confirmEmail; ?>" />
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="input-row">
                                <input type="text" name="company" placeholder="Company Name" value="<?php echo $companyName; ?>" />
                            </div>
                            <div class="input-row textarea-container">
                                <input type="hidden" name="requestType" value="1" />
                                <textarea name="request" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Message" value="<?php echo $request; ?>"></textarea>
                            </div>
                        </div>
                        <input class="send" type="submit" name="send" value="Send" />
                    </form>
            <?php 
                }
                else
                {
					
				?>	<div class="col-md-20 row">
						<h2 id="thank-you" class="col-md-20">Thank You!</h2>	
						<span class="confirm" class="col-md-20">Your request has been successfully submitted.</span>	
					</div>
            <?php 
                }
            ?>
        </div>
        <?php include('includes/footer.php') ?>
    </div>
</body>
</html>