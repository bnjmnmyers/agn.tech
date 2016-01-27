<html>
<head>
    <title>Alchemy Global Networks | Home</title>
    <link href="css/global.css?ts=715" rel="stylesheet" />
    <?php include("includes/scriptIncludes.php"); ?>
    <script type="text/javascript" language="javascript">
		$(document).ready(function(){
			checkSize();
		});
		
		$(window).resize(function() {
			checkSize();
		});
			
		function checkSize(){
			var windowHeight = $(window).height();
			var mainWrapperHeight = $('#main-wrapper').height();
			console.log('windowHeight: '+windowHeight);
			console.log('mainWrapperHeight: '+mainWrapperHeight);
			if(windowHeight <= 869)
			{
				$('#outter-wrapper').css('height', '869px');
			}else{
				$('#outter-wrapper').css('height', '100%');
			}
		}
	</script>
</head>
<body style="background-color: black;">
	<div id="outter-wrapper">
        <div id="main-wrapper">
            <img src="images/agn-logo-blue.png" width="400" />
            <h2>Home of Alchemy Global Networks</h2><br/>
            <h4>Coming Soon</h4><br/>
            <p>Phone: <span>865.898.5496</span></p>
            <p>Email: <span>dcm@agn.tech</span></p>
        </div>
    </div>
</body>
</html>
