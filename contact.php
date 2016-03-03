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
                		<textarea name="request" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your message"></textarea>
                    </div>
                </div>
                <input class="send" type="submit" name="Send" />
            </form>
        </div>
        <?php include('includes/footer.php') ?>
    </div>
</body>
</html>