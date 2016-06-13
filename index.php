<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<script type="text/javascript" src="js/jquery.js"></script> <!-- jQuery 3.0.0v -->
	<script type="text/javascript" src="js/default.js"></script> <!-- Main Javascript -->
	
	<link rel="stylesheet" type="text/css" href="css/style.css"> <!-- Main CSS -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <!-- Bootstrap CSS -->

	<!-- Materialize 0.97.6 -->	
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<script type="text/javascript" src="js/materialize.js"></script>

	<!-- ICONS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<title>Casas</title>
</head>
<body>

	<!-- ***NAVBAR*** -->
	<ul id="dropdown1" class="dropdown-content">
	  	<li><a href="#history" class="modal-trigger">Historia</a></li>
	  	<li><a href="#mision" class="modal-trigger">Misión</a></li>
	  	<li><a href="#vision" class="modal-trigger">Visión</a></li>
	  	<!-- <li class="divider"></li>
	  	<li><a href="#!">three</a></li> -->
	</ul>
	<nav>
	    <div class="nav-wrapper">
	      	<a href="#" class="brand-logo"><i class="material-icons">home</i></a>
	      	<ul id="nav-mobile" class="right hide-on-med-and-down">
	        	<li><a href="collapsible.html">Catálogo</a></li>
	        	<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Acerca de Nosotros<i class="material-icons right">arrow_drop_down</i></a></li>
	      	</ul>
	    </div>
	 </nav>

	<!-- ***SLIDER*** -->
	<div class="slider">
	    <ul class="slides">
	      	<li>
		        <img src="http://lorempixel.com/580/250/nature/1">
		        <div class="caption center-align">
		          	<h3>This is our big Tagline!</h3>
		          	<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
	     	</li>
	      	<li>
		        <img src="https://ununsplash.imgix.net/uploads/1413259835094dcdeb9d3/6e609595?q=75&fm=jpg&s=6a4fc66161293fc4a43a6ca6f073d1c5">
		        <div class="caption left-align">
		          	<h3>Left Aligned Caption</h3>
		          	<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
	      	</li>
	      	<li>
		        <img src="http://lorempixel.com/580/250/nature/3">
		        <div class="caption right-align">
		          	<h3>Right Aligned Caption</h3>
		          	<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		    </li>
	      	<li>
		        <img src="http://lorempixel.com/580/250/nature/4">
		        <div class="caption center-align">
	          		<h3>This is our big Tagline!</h3>
	          		<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
	        	</div>
	      	</li>
	    </ul>
	 </div>

	<!-- ***MISION/VISION/HISTORIA*** -->
	<div id="history" class="modal">
    	<div class="modal-content">
      		<h4>Historia</h4>
      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor dapibus libero sed lobortis. Phasellus molestie, magna in mattis cursus, leo tortor dapibus odio, in tristique nibh metus eu nunc. Donec efficitur nulla sit amet odio mattis, eu porttitor mauris congue. Sed risus sem, commodo at risus vitae, maximus efficitur augue. Donec cursus neque leo, vel imperdiet odio bibendum vitae. Praesent ligula enim, sagittis nec ex vitae, blandit placerat ex. Donec porttitor finibus diam, id vulputate lorem cursus a. Donec in tincidunt magna. Donec et augue libero.</p>
    	</div>
	    <div class="modal-footer">
	      	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
	    </div>
  	</div>
	<div id="mision" class="modal">
    	<div class="modal-content">
      		<h4>Misión</h4>
      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor dapibus libero sed lobortis. Phasellus molestie, magna in mattis cursus, leo tortor dapibus odio, in tristique nibh metus eu nunc. Donec efficitur nulla sit amet odio mattis, eu porttitor mauris congue. Sed risus sem, commodo at risus vitae, maximus efficitur augue. Donec cursus neque leo, vel imperdiet odio bibendum vitae. Praesent ligula enim, sagittis nec ex vitae, blandit placerat ex. Donec porttitor finibus diam, id vulputate lorem cursus a. Donec in tincidunt magna. Donec et augue libero.</p>
    	</div>
	    <div class="modal-footer">
	      	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
	    </div>
  	</div>
	<div id="vision" class="modal">
    	<div class="modal-content">
      		<h4>Visión</h4>
      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor dapibus libero sed lobortis. Phasellus molestie, magna in mattis cursus, leo tortor dapibus odio, in tristique nibh metus eu nunc. Donec efficitur nulla sit amet odio mattis, eu porttitor mauris congue. Sed risus sem, commodo at risus vitae, maximus efficitur augue. Donec cursus neque leo, vel imperdiet odio bibendum vitae. Praesent ligula enim, sagittis nec ex vitae, blandit placerat ex. Donec porttitor finibus diam, id vulputate lorem cursus a. Donec in tincidunt magna. Donec et augue libero.</p>
    	</div>
	    <div class="modal-footer">
	      	<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
	    </div>
  	</div>

</body>
</html>