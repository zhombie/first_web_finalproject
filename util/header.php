<?php 
	session_start();
	if(!$_SESSION['user'])
		header("Location:index.php");
?>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='style/style.css'>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
	<script type="text/javascript" src="action/jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {  
	  	var top = $('.blogNav').offset().top - parseFloat($('.blogNav').css('marginTop').replace(/auto/, 0));
	  	$(window).scroll(function (event) {
		    var y = $(this).scrollTop();

		    if (y >= top) {
		    	$('.blogNav').addClass('fixedMenu');
		    } 
		    else {
		    	$('.blogNav').removeClass('fixedMenu');
		   	}
	  	});
	});
	
	var total_pics_num = 4; // колличество изображений
	var interval = 4000;    // задержка между изображениями
	var time_out = 5;       // задержка смены изображений
	var i = 0;
	var timeout;
	var opacity = 100;
 	function fade_to_next() {
		opacity--;
	   	var k = i + 1;
	    var image_now = 'image_' + i;
	    if (i == total_pics_num) k = 1;
	    var image_next = 'image_' + k;
	    document.getElementById(image_now).style.opacity = opacity/100;
	    document.getElementById(image_now).style.filter = 'alpha(opacity='+ opacity +')';
	    document.getElementById(image_next).style.opacity = (100-opacity)/100;
	    document.getElementById(image_next).style.filter = 'alpha(opacity='+ (100-opacity) +')';
	    timeout = setTimeout("fade_to_next()",time_out);
	    if (opacity==1) {
	      opacity = 100;
	      clearTimeout(timeout);
	    }
	  }
	  setInterval(function() {
	      i++;
	      if (i > total_pics_num) i=1;
	      fade_to_next();
	    }, interval
	  );
	</script>
</head>
<body>
<div class="content">
<div id="info">
<?php
	echo "Welcome, ".$_SESSION['user'];
?>
</div>