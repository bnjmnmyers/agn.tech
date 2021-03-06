<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alchemy Global Networks | Home</title>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/index.css" rel="stylesheet" />
    <?php include("includes/scriptIncludes.php"); ?>
</head>

<body>
	<div class="container-fluid">
    	<?php include('includes/header.php') ?>
        <div id="showcase-container" class="row">
            <section id="showcase" class="col-lg-20">
                <div id="container" class="col-log-20">
                    <h1>Alchemy Global Networks</h1>
                    <h2><i>The Gold Standard for Network Engineering</i></h2>
                    <p>Just like your business, your network needs to be agile, reliable, and strong. Design, maintain, and fortify a better network with help from the experts at Alchemy Global Networks.</p>
                </div>
            </section>
        </div>
        <div id="content-wrapper" class="row">
            <div id="about-blurb-container" class="blurb-container col-xs-20 col-sm-20 col-md-20 col-lg-20">
            	<a href="about.php"><img src="images/index/about-icon.svg" height="57" width="54" alt="About Alchemy Global Networks" title="About Icon" /></a>
            	<p class="blurb-title">What is Alchemy Global Networks?</p>
                <p class="blurb">Like an alchemist, your business and your network must perform the impossible, transforming several disparate pieces into 
one functional whole. We have the experience and the expertise to get you there. Learn more about our backgrounds and what 
makes Alchemy Global Networks the gold standard in network engineering.</p>
            </div>
            <div id="services-blurb-container" class="blurb-container col-xs-20 col-sm-20 col-md-20 col-lg-20">
            	<a href="services.php"><img src="images/index/services-icon.svg" height="57" width="54" alt="Alchemy Global Networks Services" title="Services Icon" /></a>
            	<p class="blurb-title">Services</p>
                <p class="blurb">On any given day, an amazing new technology could swoop in and fundamentally change the way you do business. That’s exciting, but there’s a downside to today’s technology-driven world. New and unpredictable threats to your cybersecurity are forming all the time, and it’s next to impossible to stay ahead of them all.</p>

<p class="blurb">From assessment to cybersecurity, from ongoing support to network and infrastructure design, trust your network services to no one but the very best. Find out more about our unmatched services and capabilities.</p>
            </div>
            <div id="contact-blurb-container" class="blurb-container col-xs-20 col-sm-20 col-md-20 col-lg-20">
            	<a href="contact.php"><img src="images/index/contact-icon.svg" height="57" width="54" alt="Contact Alchemy Global Networks" title="Contact Icon" /></a>
            	<p class="blurb-title">Contact Us</p>
                <p class="blurb">Whether you’re looking to build your dream or protect it, contact us today to begin the journey.</p>
            </div>
        </div>
        <?php include('includes/footer.php') ?>
    </div>
    <?php 
		include 'includes/environment.php';
		if(ENVIRONMENT != "DEV"){
			include 'includes/analyticstracking.php'; 
		}
	?>
</body>
</html>