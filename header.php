<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once "./admin/ewcfg11.php" ?>
<?php include_once "./admin/ewmysql11.php" ?>
<?php include_once "./admin/phpfn11.php" ?>
<div class="top1 clearfix">
<header><div class="logo_wrapper log"><a href="index.php" class="logo"><img src="img/logo_min.jpg" alt=""></a></div></header>
<div class="top2 clearfix">
<!--<div class="search-form-wrapper clearfix">
<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
	<input type="text" name="s" value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''">
	<a href="#" onClick="document.getElementById('search-form').submit()"></a>
</form>	
</div>	-->
<div class="menu_wrapper clearfix">
<div class="navbar navbar_">
	<div class="navbar-inner navbar-inner_">
		<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse nav-collapse_ collapse">
			<ul class="nav sf-menu clearfix">
<li><a href="index.php">Home</a></li>
<li><a href="quienes_somos.php">Acerca de Nosotros</a></li>
<!--<li class="sub-menu sub-menu-1"><a href="index-2.html">Nuestros Tours</a>
	<ul>
		<li><a href="index-2.html">Ofertas Especiales</a></li>	
		<li><a href="index-2.html">Nuestros tours</a></li>
		<li><a href="index-2.html">Destinos</a></li>
		<!--<li><a href="404.html">404 page not found</a></li>					
	</ul>						
</li>
<li><a href="index-3.html">Destinos</a></li>-->
<li class="sub-menu sub-menu-1"><a href="#">Viajes</a>
<li class="sub-menu sub-menu-1"><a href="#">Fincas</a>
<li class="sub-menu sub-menu-1"><a href="#">Servicios</a>
<li class="sub-menu sub-menu-1"><a href="#">Galeria</a>
	<ul>
		<li><a href="galeria.php">Fotos</a></li>	
		<li><a href="videos.php">Videos</a></li>
						
	</ul>	
</li>

<!--<li><a href="index-5.html">Servicios</a></li>											-->
<li id="contactenos"><a href="contacto.php">Contáctenos</a></li>	
    </ul>
		</div>
	</div>
</div>	
</div>
</div>	
</div>

<script>

	// 

	var fullpath =window.location.pathname;
    var filename=fullpath.replace(/^.*[\\\/]/, '');
   // alert(filename);
    var currentLink=$('a[href="' + filename + '"]'); //Selects the proper a tag
    currentLink.parent().addClass("active");


$(window).load(function() {
	//

}); //
</script>	