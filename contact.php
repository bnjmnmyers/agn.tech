<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Alchemy Global Networks | Home</title>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/contact.css" rel="stylesheet" />
    <?php include("includes/scriptIncludes.php"); ?>
</head>

<body>
	<div id="outer-wrapper">
    	<?php include('includes/header.php') ?>
        <div id="page-title">
        	<h1>Contact</h1>
        </div>
        <div id="content-wrapper">
        	<div id="content">
            	<div id="contact-blurb" class="col-md-6">
                    <p>Your journey toward a more secure, robust, and functional network begins with a first step. Whether you need a quick answer to your urgent support needs or a long-term staff augmentation, the engineers at Alchemy Global Networks are here to help.</p>
        
                    <p>Complete the form below to learn more and get started. We’ll be in touch promptly with answers to your burning questions and information about the next steps.</p>
                </div>
                <div id="contact-box" class="col-md-6">
                	<div class="google-maps">
                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3339.54381856306!2d-83.3949088!3d36.1760251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885b918dcf36908f%3A0x852bf9bbe99ba7e0!2s6161+W+Andrew+Johnson+Hwy%2C+Talbott%2C+TN+37877!5e0!3m2!1sen!2sus!4v1457224428662" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <form method="post" action="">
                	<input type="hidden" name="honeyPot" value="" />
                    <div class="col-md-6">
                        <div class="input-row">
                            <input type="text" name="first-name" placeholder="First Name*" />
                        </div>
                        <div class="input-row">
                            <input type="text" name="last-name" placeholder="Last Name*" />
                        </div>
                        <div class="input-row">
                            <input type="text" name="phone" placeholder="Phone*" />
                        </div>
                        <div class="input-row">
                            <input type="text" name="email" placeholder="Email*" />
                        </div>
                        <div class="input-row">
                            <input type="text" name="confirmEmail" placeholder="Confirm Email*" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-row">
                            <input type="text" name="company" placeholder="Company Name" />
                        </div>
                        <div class="input-row textarea-container">
                        	<input type="hidden" name="requestType" value="1" />
                            <textarea name="request" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <input class="send" type="submit" name="Send" />
                </form>
        	</div>
        </div>
        <?php include('includes/footer.php') ?>
    </div>
</body>
</html>