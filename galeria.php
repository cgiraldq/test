<!DOCTYPE html>
<html lang="en">
<head>


<title>Galería</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/isotope.css" type="text/css" media="screen">     
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/jquery.ui.totop.js"></script>

<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>

<script>
$(document).ready(function() {
	// 

}); //
$(window).load(function() {
	// isotop
	var $container = $('#isotope-items'),
		$optionSet = $('#isotope-options'), 
	    $optionSets = $('#isotope-filters'), 
	    $optionLinks = $optionSets.find('a'); 
    $container.isotope({ 
        filter: '*',
        layoutMode: 'fitRows'
    });  
   	$optionLinks.click(function(){ 
   		var $this = $(this); 
    	// don't proceed if already selected 
		if ( $this.hasClass('selected') ) { 
			return false; 
		}    		
   		$optionSet.find('.selected').removeClass('selected'); 
   		$this.addClass('selected');

        var selector = $(this).attr('data-filter'); 
        $container.isotope({ 
            filter: selector            
        }); 
      	return false; 
    });    	
	$(window).on("resize", function( event ) {	
		$container.isotope('reLayout');		
	});		

	// touchTouch
	$('.thumb-isotope .thumbnail a').touchTouch();

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
<div class="img"><img src="img/banner3.jpg" alt=""></div>
<!--<img src="img/grad2.png" alt="" class="grad2">-->
<div class="slider_bot">
<div class="page_title"></div>
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="index.php">Inicio</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Galería</div>	
</div>
</div>
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span12">
	
<!--<h1>Galería</h1>

<div id="isotope-options">
    <ul id="isotope-filters" class="clearfix">
        <li><a href="#" class="selected" data-filter="*">Mostrar Todo</a></li> 
        <li><a href="#" data-filter=".isotope-filter1">Categoría 1</a></li> 
        <li><a href="#" data-filter=".isotope-filter2">Categoría 2</a></li> 
        <li><a href="#" data-filter=".isotope-filter3">Categoría 3</a></li> 	             
    </ul>            
</div>-->

<ul class="thumbnails" id="isotope-items">	

<?php
		$conn = ew_Connect(); 
//global $conn, $Language, $Security;
$rs = $conn->Execute("select * from galeria where activo=1 order by orden");
$rsgaleria = ($rs) ? $rs->GetRows() : array();

for($i=0;$i<count($rsgaleria);$i++){
		
	echo '<li class="span3 isotope-element isotope-filter1">
		<div class="thumb-isotope1">
			<div class="thumbnail clearfix">
				<a href="./galerias.php?id='.$rsgaleria[$i]["id"].'">
					<figure>
						<img src="./admin/archivos/'.$rsgaleria[$i]["portada"].'" alt=""><em></em>
					</figure>
					<div class="caption">
						<div class="txt1">'.$rsgaleria[$i]["nombre"].'</div>							
						<div class="txt2">'.$rsgaleria[$i]["descripcion"].'</div>
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



<?php include("footer.php");?> 