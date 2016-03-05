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
            	<div id="contact-blurb">
                    <p>Your journey toward a more secure, robust, and functional network begins with a first step. Whether you need a quick answer to your urgent support needs or a long-term staff augmentation, the engineers at Alchemy Global Networks are here to help.</p>
        
                    <p>Complete the form below to learn more and get started. We’ll be in touch promptly with answers to your burning questions and information about the next steps.</p>
                </div>
                <div id="contact-box">
                	<p>You can also reach us by phone or email at:</p>
                    <span>Call: 865.898.5496</span>
                    <span>Email: dcm@agn.tech</span>
                </div>
                <form method="post" action="">
                    <div class="col-lg-6">
                        <div class="input-row">
                            <input type="text" name="first-name" placeholder="First Name" />
                        </div>
                        <div class="input-row">
                            <input type="text" name="last-name" placeholder="Last Name" />
                        </div>
                        <div class="input-row">
                            <input type="text" name="phone" placeholder="Phone" />
                        </div>
                        <div class="input-row">
                            <input type="text" name="email" placeholder="Email" />
                        </div>
                        <div class="input-row">
                            <input type="text" name="company" placeholder="Company Name" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-row textarea-container">
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