<!DOCTYPE html>
<html lang="en">
<head>
<title>contáctenos</title>
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

<script type="text/javascript" src="js/cform.js"></script>

<script>
$(document).ready(function() {
	// 

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
<div class="img"><img src="img/banner1.jpg" alt=""></div>
<!--<img src="img/grad2.png" alt="" class="grad2">-->
<div class="slider_bot">
<div class="page_title"></div>
<div class="breadcrumbs1">
<div class="breadcrumbs1_inner"><a href="index.php">Inicio</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Contacto</div>	
</div>
</div>
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span9">
	
<!--<h1>Our Address</h1>

<figure class="google_map">
    <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Glasgow,&amp;aq=&amp;sll=46.975033,31.994583&amp;sspn=0.368248,0.617294&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Glasgow,+Glasgow+City,+United+Kingdom&amp;t=m&amp;ll=55.866932,-4.256344&amp;spn=0.020324,0.070896&amp;z=13&amp;output=embed"></iframe>
</figure>

<h3>Travel Guide</h3>

<p>
	8901 Marmora Road,<br>
Glasgow, D04 89GR.<br>-->
<br><br><br>

<!--<h2>Contact Form</h2>-->

<div id="note"></div>
<div id="fields">
	<form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
		<div class="row">
			<div class="span3">
				<div class="control-group">
				    <label class="control-label" for="inputName">Nombre Completo:</label>
				    <div class="controls">				      
				      <input class="span3" type="text" id="inputName" name="name" value="" placeholder="Nombre Completo" onBlur="if(this.value=='') this.value='Your full name:'" onFocus="if(this.value =='Your full name:' ) this.value=''">
				    </div>
				</div>				
			</div>	
			<div class="span3">
				<div class="control-group">
				    <label class="control-label" for="inputEmail">E-mail:</label>
				    <div class="controls">				      
				      <input class="span3" type="text" id="inputEmail" name="email" value="" placeholder="E-mail" onBlur="if(this.value=='') this.value='Your email:'" onFocus="if(this.value =='Your email:' ) this.value=''">
				    </div>
				</div>
			</div>		
			<div class="span3">
				<div class="control-group">
				    <label class="control-label" for="inputPhone">Número Contacto:</label>
				    <div class="controls">				      
				      <input class="span3" type="text" id="inputPhone" name="phone" value="" placeholder="Número de Contácto" onBlur="if(this.value=='') this.value='Phone number:'" onFocus="if(this.value =='Phone number:' ) this.value=''">
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span9">
				<div class="control-group">
				    <label class="control-label" for="inputMessage">Mensaje:</label>
				    <div class="controls">				      				      
				      <textarea class="span9" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message:'" 
                        onFocus="if(this.value =='Message:' ) this.value=''">Mensaje:</textarea>
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span9">
				<div class="control-group capthca">
				    <label class="control-label" for="inputCapthca">Capthca:</label>
				    <div class="controls">				      
				      <input class="" type="text" id="inputCapthca" name="capthca" value="Capthca:" onBlur="if(this.value=='') this.value='Capthca:'" onFocus="if(this.value =='Capthca:' ) this.value=''">
				      <img src="captcha/captcha.php">
				    </div>
				</div>
			</div>
		</div>
		<button type="submit" class="submit">Enviar</button>
	</form>
</div>

</div>
<div class="span3">
<div class="testimonial1">
<?php
		$conn = ew_Connect(); 
//global $conn, $Language, $Security;
$rs = $conn->Execute("select * from paginas where pagina='contacto'");
$rspagina = ($rs) ? $rs->GetRows() : array();
echo $rspagina[0]["texto"];
?>
</div>
</div>
</div>	
</div>	
</div>

<div id="content2" style="display: none;">
<div class="container">
<div class="row">
<div class="span9">
	
<h2>Best Tour</h2>

<div class="thumb1">
	<div class="thumbnail clearfix">
		<figure class="img-polaroid"><img src="http://via.placeholder.com/209x192" alt=""></figure>
		<div class="caption">
			<p>
				<strong>Epsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </strong>
			</p>
			<p>
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. Suspendisse enim arcu, convallis non, cursus sed, dignissim et, est. Aenean semper aliquet libero. In ante velit, cursus ut, ultrices vitae, tempor ut, risus.  Duis pulvinar. Vestibulum vel pede at sapien sodales mattis. Quisque pretium, lacus nec iaculis vehicula, arcu libero consectetuer massa, auctor aliquet mauris ligula id ipsum. 
			</p>
			<a href="#" class="button1">read more</a>
		</div>
	</div>
</div>



</div>
<div class="span3">
	
<h2>Services</h2>

<ul class="ul1">
  <li><a href="#">Fusce euismod consequat</a></li>
  <li><a href="#">Lorem ipsum dolor sit amet, </a></li>
  <li><a href="#">Pellentesque sed dolor</a></li>
  <li><a href="#">Aliquam congue nisl</a></li>
  <li><a href="#">Mauris accumsan diam</a></li>
  <li><a href="#">Sed in lacus ut adipiscing</a></li>		            		      	      			      
</ul>

<a href="#" class="button1">read more</a>





</div>	
</div>	
</div>	
</div>

<?php include("footer.php"); ?>