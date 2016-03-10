<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alchemy Global Networks | Home</title>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/services.css" rel="stylesheet" />
    <?php include("includes/scriptIncludes.php"); ?>
</head>

<body>
	<div id="outer-wrapper">
    	<?php include('includes/header.php') ?>
        <div id="page-title">
        	<h1>Services</h1>
        </div>
        <div id="content-wrapper">
            <div id="content">
                <div id="what-we-do">
                    <h2>What We Do</h2>
                    <p>Your network is the lifeblood of your organization—you can’t afford to have it compromised, insecure, or ineffective. At Alchemy Global Networks, our focus is always on you and your network: whatever your business needs, we’re here to uncover the underlying issues and provide a workable solution.</p>
                
                    <p>With unmatched skill, experience, and expertise, our services form the gold standard in enterprise network engineering and cybersecurity. Whether you’re looking to install a new solution, beef up your security, or receive ongoing expert support, we’re with you every step of the way, providing accessible, personal, and absolutely premium network services.</p>	
                </div>
                <div id="services" class="row">
                    <div id="assessment" class="service-button col-md-15">
                        <img src="images/services/assessment-icon.svg" height="144" width="144" alt="" title="" />
                        <span>Assessment</span>
                    </div>
                    
                    <div id="installation" class="service-button col-md-15">
                        <img src="images/services/installation-icon.svg" height="144" width="144" alt="" title="" />
                        <span>Installation</span>
                    </div>
                    
                    <div id="support" class="service-button col-md-15">
                        <img src="images/services/support-icon.svg" height="144" width="144" alt="" title="" />
                        <span>Ongoing Support</span>
                    </div>
                    
                    <div id="design" class="service-button col-md-15">
                        <img src="images/services/design-icon.svg" height="144" width="144" alt="" title="" />
                        <span>Design</span>
                    </div>
                    
                    <div id="staff" class="service-button col-md-15">
                        <img src="images/services/staff-icon.svg" height="144" width="144" alt="" title="" />
                        <span>Staff Augmentation</span>
                    </div>
                </div>
                <div id="assessment-block" class="service">
                    <h3>Assessment</h3>
                    
                    <p>Before you can deploy a smart solution, you need to first diagnose the underlying problem. There are no one-size-fits-all answers to enterprise network issues—your network infrastructure, concerns, and business goals are one of a kind. That’s why we begin with an in-depth, comprehensive assessment of your network. We’ll familiarize ourselves with specifics of your environment and your challenges.</p> 
                    
                    <p>With decades of network engineering experience and the highest certifications, we’re equipped to identify any security risks, potential pitfalls, and problematic configurations—and find the effective solutions to keep your network safe, reliable, and strong.</p> 
                </div>
                <div id="installation-block" class="service">
                    <h3>Installation</h3>
                    
                    <p>No single solution is the best in every aspect of network security—you’ve got to find the one that suits your particular needs. That’s why our network experts posses the highest certifications across a range of manufacturers—including ForeScout, Cisco, and Juniper.</p> 
                    
                    <p>Whatever solution you need, we’ll help you get it installed, optimized, and running smoothly to support your business.</p> 
                </div>
                <div id="support-block" class="service">
                    <h3>Ongoing Support</h3>
                    
                    <p>Say goodbye to hold times, 1-800 numbers, and the frustrations of dealing with vendor support teams that don’t know the ins and outs of your network.</p> 
                    
                    <p>Our team works to understand your systems as if they were our own. We’re on call 24/7 to make sure your network remains functional and secure around the clock.</p>
                </div>
                <div id="design-block" class="service">
                    <h3>Design</h3>
                    
                    <p>Whether you want to upgrade your systems now or you’re planning a long-term migration to new technologies, we’re here to help you find the right solution. Our experts will listen to your business requirements and plot the ideal path forward, even if we aren’t executing the plan ourselves.</p> 
                    
                    <p>With experience across every vertical and niche, we know that change is always around the corner—and we can help to ensure that you and your network are prepared for whatever comes your way.</p>
                </div>
                <div id="staff-block" class="service">
                    <h3>Staff Augmentation</h3>
                    
                    <p>Looking to bring Alchemy Global Network’s skilled network engineering and cybersecurity experts into your own offices? We can make that happen.</p> 
                    
                    <p>Our staff augmentation program is flexible and affordable for businesses that need dedicated, full-time support, but don’t want to commit to hiring a full-time employee. Whether you need one person or four, for six months or six years, our staff members work as an extension of your team, bringing the absolute highest dedication and professionalism right to your place of business. </p> 
                </div>
            </div>
        </div>
        <?php include('includes/footer.php') ?>
    </div>
    <script type="text/javascript" language="javascript">
		$(document).ready(function(){
			$('.service-button img').bind('click',function(){
				if($('.service-button img').hasClass('active')){
					activeImgSrc = $('img.active').attr('src');
					nonActiveSrc = activeImgSrc.replace(/(\-active\.\w{3,4})$/i,'');
					console.log(nonActiveSrc);
					$('img.active').attr('src',nonActiveSrc+'.svg');
					$('img.active').removeClass('active');
				}
				$(this).addClass('active');
				imgSource = $(this).attr('src');
				imgActive = imgSource.replace(/(\.\w{3,4})$/i, '-active$1');
				$(this).attr('src',imgActive);
				var buttonName = $(this).parent().attr('id');
				$('.service').removeClass('active');
				$('#'+buttonName+'-block').addClass('active');
			});
		});
	</script>
</body>
</html>