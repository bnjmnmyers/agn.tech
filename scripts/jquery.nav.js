// JavaScript Document
$(document).ready(function(){
	var inTesting = true;
	var pathname = window.location.pathname;
	var devDir = '';
	var pull = $('#pull');
	var menu = $('#nav');
	var menuHeight = menu.height();
	
	if(inTesting){
		devDir = '/dev';	
	}
	else{
		devDir = '';	
	}
	
	switch(pathname){
		case devDir+'/about.php':
			$('#navAbout').addClass('active');
			break;	
		case devDir+'/contact.php':
			$('#navContact').addClass('active');
			break;
		case devDir+'/services.php':
			$('#navServices').addClass('active');
			break;
		default:
			$('#navHome').addClass('active');	
	}
	
	$('.active').css({
		'color':'#dc9d34',
		'border-bottom':'6px solid #dc9d34'
	});
	
	$('#nav a').bind('mouseover',function(){
		$(this).css({
			'color':'#dc9d34',
			'border-bottom':'6px solid #dc9d34'
		});	
	}).bind('mouseout',function(){
		if(!$(this).hasClass('active')){
			$(this).css({
				'color':'#dc9d34',
				'border-bottom':'none'
			});
		}
	});
	
	$(pull).on('click', function(e){
		e.preventDefault();
		menu.slideToggle();
	});
});