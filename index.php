<!DOCTYPE html>
<html lang="en">
<head>

<title>La Guia colombia viaja por colombia2fdbdsbd</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/jquery.ui.totop.js"></script>

<script type="text/javascript" src="js/camera.js"></script>
<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>

<script type="text/javascript" src="js/jquery.caroufredsel.js"></script>
<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
<script>
$(document).ready(function() {
	// camera
	$('#camera_wrap').camera({
		//thumbnails: true
		autoAdvance			: true,		
		mobileAutoAdvance	: true,
		//fx					: 'simpleFade',
		height: '51%',
		hover: false,
		loader: 'none',
		navigation: true,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		pagination			: true,
		time: 7000,
		transPeriod: 1000,
		minHeight: '200px'
	});

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

<body class="main">
<div id="main">

<?php include("header.php");?> 

<div id="slider_wrapper">
	<div id="slider" class="clearfix">
		<div id="camera_wrap">
		<?php
		$conn = ew_Connect(); 
//global $conn, $Language, $Security;
$rs = $conn->Execute("select * from banners where activo=1 order by orden");
$rsbanner = ($rs) ? $rs->GetRows() : array();

for($i=0;$i<count($rsbanner);$i++){
	echo '	<div data-src="./admin/archivos/'.$rsbanner[$i]["imagen"].'">
				<div class="camera_caption fadeIn">
					<div class="txt1">'.$rsbanner[$i]["descripcion1"].'</div>			
					<div class="txt2">'.$rsbanner[$i]["descripcion2"].'</div>
				</div>     
			</div>';
	
}


//var_dump($rsbanner);DIE;
		?>
		
		

			<!--<div data-src="./img/guia/fonda.jpg">
				<div class="camera_caption fadeIn">
					<div class="txt1"></div>			
					<div class="txt2"></div>
				</div>     
			</div>
			
			<div data-src="./img/guia/salado/1.jpg">
				<div class="camera_caption fadeIn">
					<div class="txt1"></div>			
					<div class="txt2"></div>
				</div>     
			</div>
			
			<div data-src="./img/guia/estructura.jpg">
				<div class="camera_caption fadeIn">
					<div class="txt1"></div>			
					<div class="txt2"></div>
				</div>     
			</div>-->
			
			
			
		</div>
	</div>
<nav class="menu_splash">
	<ul id="menu_splash" class="clearfix">
		<li class="nav1">
			<a href="#" class="rollover">
			<div class="cube">
			  <div class="front">    
			    <img src="img/ic1.png" alt="" class="img_icon">
			    <div class="txt1">APRENDE</div>
			  </div>
			  <div class="back">
			  	<img src="img/ic1.png" alt="" class="img_icon">
			    <div class="txt1">APRENDE</div>
			  </div>
			</div>
			</a>
		</li>
		<li class="nav2">
			<a href="#" class="rollover">
			<div class="cube">
			  <div class="front">    
			    <img src="img/ic2.png" alt="" class="img_icon">
			    <div class="txt1">VIAJA</div>
			  </div>
			  <div class="back">
			  	<img src="img/ic2.png" alt="" class="img_icon">
			    <div class="txt1">VIAJA</div>
			  </div>
			</div>
			</a>
		</li>
		<li class="nav3">
			<a href="#" class="rollover">
			<div class="cube">
			  <div class="front">    
			    <img src="img/ic3.png" alt="" class="img_icon">
			    <div class="txt1">DISFRUTA</div>
			  </div>
			  <div class="back">
			  	<img src="img/ic3.png" alt="" class="img_icon">
			    <div class="txt1">DISFRUTA</div>
			  </div>
			</div>
			</a>
		</li>
		<li class="nav4">
			<a href="#" class="rollover">
			<div class="cube">
			  <div class="front">    
			    <img src="img/ic4.png" alt="" class="img_icon">
			    <div class="txt1">EXPLORA</div>
			  </div>
			  <div class="back">
			  	<img src="img/ic4.png" alt="" class="img_icon">
			    <div class="txt1">EXPLORA</div>
			  </div>
			</div>
			</a>
		</li>
	</ul>
</nav>
</div>

<div class="slogan1">
<div class="container">
<div class="row">
<div class="span12">
<?php
			$rs = $conn->Execute("select * from paginas where pagina='home' and seccion='bajo_slide'");
$rshomeb = ($rs) ? $rs->GetRows() : array();
echo $rshomeb[0]["texto"];
?>
</div>	
</div>	
</div>	
</div>

<div id="slider3_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div id="slider3">
<div class="slider3-title">Destinos Populares</div>	
<a class="prev3" href="#"></a>
<a class="next3" href="#"></a>	
<div class="carousel-box row">
	<div class="inner span12">			
		<div class="carousel main">
			<ul>
			<?php
			$rs = $conn->Execute("select * from destinos_populares where activo=1 order by orden");
$rsdestinos = ($rs) ? $rs->GetRows() : array();

for($i=0;$i<count($rsdestinos);$i++){
	echo '<li>
					<div class="thumb-carousel banner1">
						<div class="thumbnail clearfix">
							<a href="'.$rsdestinos[$i]["enlace"].'">
								<figure>
									<img src="./admin/archivos/'.$rsdestinos[$i]["imagen"].'" alt="">
									<em></em>
								</figure>
								<div class="caption">
									'.$rsdestinos[$i]["nombre"].'
								</div>								
							</a>								
						</div>
					</div>
				</li>';
	
}
		?>	
				

				
			</ul>
		</div>
	</div>
</div>
</div>	
</div>	
</div>	
</div>	
</div>

<div id="content">
<div class="container">
<div class="row">
<!--<div class="span9">
	
<h1>Bienvenido a la guia viajera Colombia</h1>

<h3>CONOCE COLOMBIA.</h3>

<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="./img/guia/paisaje_min.png" alt=""></figure>
		<div class="caption">
			<p>
				Déjate deslumbrar por nuestros paisajes, que sean tus ojos quienes prueben lo bello de nuestra tierra. Siente sobre tu piel el viento frío o cálido de nevados o llanuras. Que tus pies comprueben lo encantador de nuestras playas y que nunca te pierdas los destinos que te ofrece cada región, como el Tayrona, el Paisaje Cultural Cafetero, las selvas del Pacífico, los llanos orientales o la selva del Amazonas, pueblos o municipios de nuestro pais. Cada lugar te demostrará por qué Colombia es el paraíso de la sabrosura.
			</p>
			<a href="#" class="button1">Leer Más</a>
		</div>
	</div>
</div>

</div>-->
<?php
			$rs = $conn->Execute("select * from paginas where pagina='home' and seccion='bienvenida'");
$rshomeb = ($rs) ? $rs->GetRows() : array();
echo $rshomeb[0]["texto"];
?>
<div class="span3 span3_1">
	
<!--<h2>Servicios</h2>

<ul class="ul1">
  <li><a href="#">Tour reservation</a></li>
  <li><a href="#">Insurance</a></li>
  <li><a href="#">Tickets online</a></li>
  <li><a href="#">Hotel booking</a></li>
  <li><a href="#">Consultation</a></li>
  <li><a href="#">Transfer</a></li>		            		      	      			      
</ul>-->
<iframe width="500px" height="980px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.10/plugins/page.php?wmode=transparent&amp;adapt_container_width=true&amp;app_id=214154031941273&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F2VRzCA39w_9.js%3Fversion%3D42%23cb%3Df2bc49c701892c%26domain%3Dlaguiaviajeracolombia.com%26origin%3Dhttps%253A%252F%252Flaguiaviajeracolombia.com%252Ff35c4b6fc5429a4%26relation%3Dparent.parent&amp;container_width=495&amp;height=980&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Flaguiaviajera0%2F&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=750" style="border: none; visibility: visible; width: 100%; height: 500px;" class=""></iframe>


</div>	
</div>	
</div>	
</div>



<?php include("footer.php"); ?>

	
