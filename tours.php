<!DOCTYPE html>
<html lang="en">
<head>
<title>hot tours</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/jquery.ui.totop.js"></script>

<script type="text/javascript" src="js/jquery.caroufredsel.js"></script>
<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>

<script>
$(document).ready(function() {
	//	carouFredSel
	$('#slider3 .carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 80000					
		},
		responsive: true,
		prev: '.prev3',
		next: '.next3',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo"
		},			
		items: {
        	width: '350',
			height: 'variable',	//	optionally resize item-height			  
			visible: {
				min: 1,
				max: 4
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			}
	});
	$(window).bind("resize",updateSizes_vat).bind("load",updateSizes_vat);
	function updateSizes_vat(){		
		$('#slider3 .carousel.main ul').trigger("updateSizes");
	}
	updateSizes_vat();

}); //
$(window).load(function() {
	//

}); //
</script>		
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
	<![endif]-->    

<!--[if lt IE 9]>
  <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body class="subpage">
<div id="main">

<?php include("header.php");?> 

<div id="slider_wrapper">
<div class="img"><img src="http://via.placeholder.com/1600x275" alt=""></div>
<img src="img/grad2.png" alt="" class="grad2">
<div class="slider_bot">
<div class="page_title">Hot Tours</div>
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="index.html">Home Page</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Hot Tours</div>	
</div>
</div>
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span9">
	
<h1>Our Best Tours</h1>

<div class="row">
<div class="span3">
<div class="thumb2">
	<div class="thumbnail clearfix">
		<figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
		<div class="caption">
			<h4>New York</h4>
			<p>
				<strong>Price: $250</strong>
			</p>
			<p>
				Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
			</p>			
		</div>
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb2">
	<div class="thumbnail clearfix">
		<figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
		<div class="caption">
			<h4>Africa</h4>
			<p>
				<strong>Price: $429</strong>
			</p>
			<p>
				Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
			</p>			
		</div>
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb2">
	<div class="thumbnail clearfix">
		<figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
		<div class="caption">
			<h4>New England</h4>
			<p>
				<strong>Price: $129</strong>
			</p>
			<p>
				Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
			</p>			
		</div>
	</div>
</div>	
</div>	
</div>

<div class="row">
<div class="span3">
<div class="thumb2">
	<div class="thumbnail clearfix">
		<figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
		<div class="caption">
			<h4>India</h4>
			<p>
				<strong>Price: $200</strong>
			</p>
			<p>
				Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
			</p>			
		</div>
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb2">
	<div class="thumbnail clearfix">
		<figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
		<div class="caption">
			<h4>Paris</h4>
			<p>
				<strong>Price: $580</strong>
			</p>
			<p>
				Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
			</p>			
		</div>
	</div>
</div>	
</div>
<div class="span3">
<div class="thumb2">
	<div class="thumbnail clearfix">
		<figure class=""><img src="http://via.placeholder.com/270x270" alt=""></figure>
		<div class="caption">
			<h4>Maldives</h4>
			<p>
				<strong>Price: $499</strong>
			</p>
			<p>
				Abore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt 
			</p>			
		</div>
	</div>
</div>	
</div>	
</div>



</div>
<div class="span3">
	
<h2>Destination List</h2>

<ul class="ul1">
  <li><a href="#">Fusce euismod consequat</a></li>
  <li><a href="#">Lorem ipsum dolor sit amet,</a></li>
  <li><a href="#">Pellentesque sed dolor</a></li>
  <li><a href="#">Aliquam congue fermentum</a></li>
  <li><a href="#">Mauris accumsan nulla vel</a></li>
  <li><a href="#">Sed in lacus ut adipiscing</a></li>
  <li><a href="#">Fusce euismod consequat</a></li>
  <li><a href="#">Lorem ipsum dolor sit amet,</a></li>
  <li><a href="#">Pellentesque sed dolor</a></li>
  <li><a href="#">Aliquam congue fermentum</a></li>
  <li><a href="#">Mauris accumsan nulla vel</a></li>
  <li><a href="#">Sed in lacus ut adipiscing</a></li>		            		      	      			      
</ul>





</div>	
</div>	
</div>	
</div>

<div id="slider3_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div id="slider3">
<div class="slider3-title">hot Tours</div>	
<a class="prev3" href="#"></a>
<a class="next3" href="#"></a>	
<div class="carousel-box row">
	<div class="inner span12">			
		<div class="carousel main">
			<ul>
				<li>
					<div class="thumb-carousel banner1">
						<div class="thumbnail clearfix">
							<a href="#">
								<figure>
									<img src="http://via.placeholder.com/277x277" alt="">
									<em></em>
								</figure>
								<div class="caption">
									Maldives
								</div>								
							</a>								
						</div>
					</div>
				</li>
				<li>
					<div class="thumb-carousel banner1">
						<div class="thumbnail clearfix">
							<a href="#">
								<figure>
									<img src="http://via.placeholder.com/277x277" alt="">
									<em></em>
								</figure>
								<div class="caption">
									Tenerife
								</div>								
							</a>								
						</div>
					</div>
				</li>
				<li>
					<div class="thumb-carousel banner1">
						<div class="thumbnail clearfix">
							<a href="#">
								<figure>
									<img src="http://via.placeholder.com/277x277" alt="">
									<em></em>
								</figure>
								<div class="caption">
									London
								</div>								
							</a>								
						</div>
					</div>
				</li>
				<li>
					<div class="thumb-carousel banner1">
						<div class="thumbnail clearfix">
							<a href="#">
								<figure>
									<img src="http://via.placeholder.com/277x277" alt="">
									<em></em>
								</figure>
								<div class="caption">
									Egypt
								</div>								
							</a>								
						</div>
					</div>
				</li>
				<li>
					<div class="thumb-carousel banner1">
						<div class="thumbnail clearfix">
							<a href="#">
								<figure>
									<img src="http://via.placeholder.com/277x277" alt="">
									<em></em>
								</figure>
								<div class="caption">
									Greece
								</div>								
							</a>								
						</div>
					</div>
				</li>
				<li>
					<div class="thumb-carousel banner1">
						<div class="thumbnail clearfix">
							<a href="#">
								<figure>
									<img src="http://via.placeholder.com/277x277" alt="">
									<em></em>
								</figure>
								<div class="caption">
									Sri Lanka
								</div>								
							</a>								
						</div>
					</div>
				</li>																								
			</ul>
		</div>
	</div>
</div>
</div>	
</div>	
</div>	
</div>	
</div>

<?php include("footer.php");?> 