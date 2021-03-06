<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (!isset($_POST["q"])) header ("location: /");

$q = $_POST["q"];

$dati = json_decode(file_get_contents("https://api.thesneakerdatabase.com/v1/sneakers?limit=100&name=" . urlencode($q)));

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="Description" content="L'app per trovare ed acquistare le sneakers">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  	<link href="css/stile.css" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
	<link href="favicon.ico" rel="shortcut icon" />
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <title>L'app per trovare ed acquistare le sneakers</title> 
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WLXSG35');</script>
	<!-- End Google Tag Manager -->
	  
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46576313-56"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-46576313-56');
	</script>
	  
	<script>
		$(document).ready(function(){
			var currentUrl = document.URL
			var urlParts   = currentUrl.split('#');  	

			if(urlParts.length > 1){
				var ancor = jQuery('#'+urlParts[1]).offset().top;
				var pOffset = jQuery(window).scrollTop();

				var paddingFr = 0;
				var fOffset = 0;
				//var marginDiff = 90;
				 var marginDiff = 0;


				var slide = ancor - marginDiff;
				jQuery('html, body').animate({
					scrollTop: slide
				}, 800);
			}
		});
	</script>  
	  
  </head>
	
  <body>
	 <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLXSG35"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	 <header style="border-bottom: 1px solid rgba(0,0,0,.3); position: relative;">
		<nav class="navbar navbar-light">
		  <a class="navbar-brand" href="https://www.laceitapp.it/">
			<svg class="logo" width="90" height="82" viewBox="0 0 114 104">
				<style type="text/css">
					.st0{opacity:0.9;fill:#A12033;}
					.st1{fill:none;}
					.st2{fill:#FFFFFF;stroke:#9B2436;stroke-width:0.75;stroke-miterlimit:10;}
					.st3{fill:#43121B;}
					.st4{fill:#FFFFFF;}
				</style>
				<g>
					<rect x="0.2" y="0.2" class="st0" width="114" height="104"/>
					<g>
						<g>
							<g>
								<path class="st1" d="M85.9,19.8c0,0-1.8-6.4-6.4-5.5c-4.6,0.9-7,10.8-8.1,15.2c-1.1,4.4-4.4,17.8-12,14.3c0,0,1.8,5.2,3.7,5.6
									c1.9,0.4,11.1-0.9,13.4-10.7C79,27.7,77.3,21.4,85.9,19.8z"/>
								<path class="st1" d="M21,42.5c-5.3-3.2,11.9-22.3,9.3-26c-2.9-4.2-9.4,0.2-9.4,0.2c9.2-0.8-4,12.9-8.7,23.3
									C7.6,50.4,11.8,51.9,28,51.3c16.7-0.7,18.1-17.1,18.1-17.1C42.7,41.7,26.3,45.7,21,42.5z"/>
								<path class="st1" d="M57.8,36.6c-0.2-9.7,1.5-27.1-10.7-21.4c0,0,2,2.2,0.8,12.6c0,0-3.3,22.7,14.4,22
									C62.4,49.7,58,46.3,57.8,36.6z"/>
								<path class="st1" d="M85.9,20.4c-6.7,1.1-7,8-7,8c0,1.7,8.9,20.4,16.7,21.5c7,1,8.1-4.3,8.1-4.3C92.1,46.6,85.9,20.4,85.9,20.4z
									"/>
								<path class="st2" d="M28,51.3C11.8,51.9,7.6,50.4,12.2,40C16.9,29.6,30,16,20.9,16.8c0,0,6.5-4.4,9.4-0.2
									c2.6,3.7-14.6,22.8-9.3,26c5.3,3.2,22-1,25.4-8.6C46.5,34,44.7,50.6,28,51.3z M48,27.7c1.2-10.4-0.8-12.6-0.8-12.6
									c12.2-5.7,10.5,11.7,10.7,21.4c0.2,9.7,4.5,13.2,4.5,13.2C44.7,50.4,48,27.7,48,27.7z M63.8,49.5c-1.9-0.4-3.9-5.4-3.9-5.4
									c7.7,3.4,10.4-10.1,11.5-14.5c1.1-4.4,3.4-14.3,8.1-15.2c4.6-0.9,6.4,5.5,6.4,5.5c-8.6,1.6-6.9,7.9-9.4,18.9
									C74.2,48.5,65.7,49.9,63.8,49.5z M95.6,49.9C87.7,48.8,79,31.1,79.1,29.4c0,0,0.3-7.2,7-8.4c0,0,6.1,25.6,17.6,24.6
									C103.7,45.6,102.6,50.9,95.6,49.9z"/>
							</g>
							<path class="st3" d="M21.2,16.3c0,0-4.9,2.5-6.1,7.3c-1.3,4.8-3.5,5.4-3.5,5.4s8.5-2.7,10.1-4.7C21.7,24.3,28.5,15.7,21.2,16.3z"
								/>
							<path class="st3" d="M28.7,43c0,0,7.4-2.9,10.7-12.6C44.6,15.2,46.9,15,46.9,15s2.3,1.9,1.1,12.7C48,27.7,47.5,40.4,28.7,43z"/>
							<path class="st3" d="M97.9,43.8c0,0,6.3-0.8,7.5-2.4c0,0-0.8,2.6-1.5,4.3C103.8,45.7,101.1,46.1,97.9,43.8z"/>
						</g>
						<g>
							<path class="st4" d="M9,67.5h0.7v10.1h5.8v0.7H9V67.5z"/>
							<path class="st4" d="M23.1,78.3l4.3-10.8h0.9l4.2,10.8h-0.8l-1.4-3.5h-5l-1.4,3.5H23.1z M30,74.1l-2.2-5.8l-2.3,5.8H30z"/>
							<path class="st4" d="M42,76.9c-1-1.1-1.5-2.4-1.5-4c0-1.6,0.5-2.9,1.5-4c1-1.1,2.1-1.7,3.5-1.7c1.1,0,2.1,0.3,2.9,0.9
								c0.8,0.6,1.3,1.4,1.4,2.4h-0.7c-0.1-0.8-0.5-1.4-1.2-1.9c-0.7-0.5-1.5-0.7-2.4-0.7c-1.2,0-2.2,0.5-3,1.5c-0.8,1-1.2,2.2-1.2,3.5
								c0,1.4,0.4,2.6,1.2,3.5c0.8,1,1.8,1.5,3,1.5c1,0,1.8-0.3,2.5-0.9c0.7-0.6,1-1.4,1.1-2.3h0.7c-0.1,1.2-0.5,2.1-1.3,2.8
								c-0.8,0.7-1.8,1.1-3,1.1C44.1,78.5,43,78,42,76.9z"/>
							<path class="st4" d="M58.7,78.3V67.5h7.1v0.7h-6.3v4.2h5.8V73h-5.8v4.6h6.3v0.7H58.7z"/>
							<path class="st4" d="M86.1,78.3V67.5h0.7v10.8H86.1z"/>
							<path class="st4" d="M99.1,78.3V68.2h-3.7v-0.7h8.2v0.7h-3.7v10.1H99.1z"/>
						</g>
					</g>
				</g>
			</svg>
		  </a>
			<div>
				<a href="https://www.instagram.com/laceitapp/?hl=it" target="_blank">
					<svg class="social" width="30" height="30" viewBox="0 0 35 35">
						<path class="insta" d="M17.5,8.5c-5,0-9,4-9,9s4,9,9,9s9-4,9-9S22.5,8.5,17.5,8.5z M17.5,23.3c-3.2,0-5.8-2.6-5.8-5.8s2.6-5.8,5.8-5.8
							s5.8,2.6,5.8,5.8S20.7,23.3,17.5,23.3L17.5,23.3z M28.9,8.2c0,1.2-0.9,2.1-2.1,2.1c-1.2,0-2.1-0.9-2.1-2.1s0.9-2.1,2.1-2.1
							C28,6.1,28.9,7,28.9,8.2z M34.9,10.3C34.7,7.5,34.1,5,32.1,3c-2-2-4.5-2.7-7.3-2.8C21.8,0,13.2,0,10.3,0.1C7.5,0.3,5,0.9,2.9,2.9
							s-2.7,4.5-2.8,7.3C0,13.2,0,21.8,0.1,24.7C0.3,27.5,0.9,30,2.9,32c2.1,2,4.5,2.7,7.3,2.8c2.9,0.2,11.5,0.2,14.4,0
							c2.8-0.1,5.3-0.8,7.3-2.8c2-2,2.7-4.5,2.8-7.3C35,21.8,35,13.2,34.9,10.3L34.9,10.3z M31.1,27.8c-0.6,1.5-1.8,2.7-3.3,3.3
							c-2.3,0.9-7.8,0.7-10.3,0.7s-8,0.2-10.3-0.7c-1.5-0.6-2.7-1.8-3.3-3.3C2.9,25.5,3.2,20,3.2,17.5S3,9.5,3.9,7.2
							c0.6-1.5,1.8-2.7,3.3-3.3C9.5,2.9,15,3.2,17.5,3.2s8-0.2,10.3,0.7c1.5,0.6,2.7,1.8,3.3,3.3c0.9,2.3,0.7,7.8,0.7,10.3
							S32.1,25.5,31.1,27.8z"/>
					</svg>

				</a>
			</div>
		</nav>
  	 </header>
	  
	<section>
		<div class="container">
			<div class="col-12 px-0 text-center pdTop pb-md-4 pb-lg-5">
				<h1 class="mb-3 title">Il risultato della ricerca per <br class="d-lg-none"><span class="ClrBrdo"><?php echo $q; ?></span></h1>
				<h2 class="titoletto">Trovate <span class="ClrBrdo"><strong><?php echo $dati->count ?></strong></span> scarpe di cui qui sotto vedi i primi 100</h2>
			</div>
			<div class="d-flex flex-wrap mrgMin" style="margin-left: -15px; margin-right: -15px;">
				
					<?php

					foreach ($dati->results as $r)
					{
						?>
				<div class="col-sm-6 col-lg-3 my-3 my-sm-4 bxProdotto">
					<div class="bxImage mb-sm-3">
				    	<img src="<?php echo ($r->media->thumbUrl != "") ? $r->media->thumbUrl : "https://www.laceitapp.it/img/DefaultImage.jpg" ; ?>" alt="<?php echo $r->name; ?>"/> 
					</div>
					<div class="px-3 text-center text-lg-left">
						<h2 class="titoletto"><?php echo $r->brand; ?></h2>
						<h3 class="titoletto"><?php echo $r->name; ?></h3>
					</div>
				</div>
	
				<?php } ?>
			</div>
		</div>
	</section>
	<hr class="my-4">
	<section>
		<div class="container pb-5 text-center pt-3">
		<div class="mainTitle text-center mainTitleBlack">l'app è in costruzione!</div> 
		<div class="title text-center mb-2" style="font-weight:500;">Presto saremo in grado di aiutarti a trovare ciò che hai cercato</div>
		<h2 class="title text-center pt-4">REGISTRATI PER RIMANERE AGGIORNATO </h2>	
		<a class="btn btn-primary btPrm mt-3" href="https://www.laceitapp.it/#registrationForm" role="button">Registrati subito!</a>
		</div>
	</section>
	
	
	
  	
	  
	<footer class="text-white py-4" style="background-color: #333139;">
		<div class="container">
			<div class="text-center pb-3">
				<svg class="logoFooter" width="80" height="73" viewBox="0 0 114 104">
				<style type="text/css">
					.st0{opacity:0.9;fill:#A12033;}
					.st1{fill:none;}
					.st2{fill:#FFFFFF;stroke:#9B2436;stroke-width:0.75;stroke-miterlimit:10;}
					.st3{fill:#43121B;}
					.st4{fill:#FFFFFF;}
				</style>
				<g>
					<rect x="0.2" y="0.2" class="st0" width="114" height="104"/>
					<g>
						<g>
							<g>
								<path class="st1" d="M85.9,19.8c0,0-1.8-6.4-6.4-5.5c-4.6,0.9-7,10.8-8.1,15.2c-1.1,4.4-4.4,17.8-12,14.3c0,0,1.8,5.2,3.7,5.6
									c1.9,0.4,11.1-0.9,13.4-10.7C79,27.7,77.3,21.4,85.9,19.8z"/>
								<path class="st1" d="M21,42.5c-5.3-3.2,11.9-22.3,9.3-26c-2.9-4.2-9.4,0.2-9.4,0.2c9.2-0.8-4,12.9-8.7,23.3
									C7.6,50.4,11.8,51.9,28,51.3c16.7-0.7,18.1-17.1,18.1-17.1C42.7,41.7,26.3,45.7,21,42.5z"/>
								<path class="st1" d="M57.8,36.6c-0.2-9.7,1.5-27.1-10.7-21.4c0,0,2,2.2,0.8,12.6c0,0-3.3,22.7,14.4,22
									C62.4,49.7,58,46.3,57.8,36.6z"/>
								<path class="st1" d="M85.9,20.4c-6.7,1.1-7,8-7,8c0,1.7,8.9,20.4,16.7,21.5c7,1,8.1-4.3,8.1-4.3C92.1,46.6,85.9,20.4,85.9,20.4z
									"/>
								<path class="st2" d="M28,51.3C11.8,51.9,7.6,50.4,12.2,40C16.9,29.6,30,16,20.9,16.8c0,0,6.5-4.4,9.4-0.2
									c2.6,3.7-14.6,22.8-9.3,26c5.3,3.2,22-1,25.4-8.6C46.5,34,44.7,50.6,28,51.3z M48,27.7c1.2-10.4-0.8-12.6-0.8-12.6
									c12.2-5.7,10.5,11.7,10.7,21.4c0.2,9.7,4.5,13.2,4.5,13.2C44.7,50.4,48,27.7,48,27.7z M63.8,49.5c-1.9-0.4-3.9-5.4-3.9-5.4
									c7.7,3.4,10.4-10.1,11.5-14.5c1.1-4.4,3.4-14.3,8.1-15.2c4.6-0.9,6.4,5.5,6.4,5.5c-8.6,1.6-6.9,7.9-9.4,18.9
									C74.2,48.5,65.7,49.9,63.8,49.5z M95.6,49.9C87.7,48.8,79,31.1,79.1,29.4c0,0,0.3-7.2,7-8.4c0,0,6.1,25.6,17.6,24.6
									C103.7,45.6,102.6,50.9,95.6,49.9z"/>
							</g>
							<path class="st3" d="M21.2,16.3c0,0-4.9,2.5-6.1,7.3c-1.3,4.8-3.5,5.4-3.5,5.4s8.5-2.7,10.1-4.7C21.7,24.3,28.5,15.7,21.2,16.3z"
								/>
							<path class="st3" d="M28.7,43c0,0,7.4-2.9,10.7-12.6C44.6,15.2,46.9,15,46.9,15s2.3,1.9,1.1,12.7C48,27.7,47.5,40.4,28.7,43z"/>
							<path class="st3" d="M97.9,43.8c0,0,6.3-0.8,7.5-2.4c0,0-0.8,2.6-1.5,4.3C103.8,45.7,101.1,46.1,97.9,43.8z"/>
						</g>
						<g>
							<path class="st4" d="M9,67.5h0.7v10.1h5.8v0.7H9V67.5z"/>
							<path class="st4" d="M23.1,78.3l4.3-10.8h0.9l4.2,10.8h-0.8l-1.4-3.5h-5l-1.4,3.5H23.1z M30,74.1l-2.2-5.8l-2.3,5.8H30z"/>
							<path class="st4" d="M42,76.9c-1-1.1-1.5-2.4-1.5-4c0-1.6,0.5-2.9,1.5-4c1-1.1,2.1-1.7,3.5-1.7c1.1,0,2.1,0.3,2.9,0.9
								c0.8,0.6,1.3,1.4,1.4,2.4h-0.7c-0.1-0.8-0.5-1.4-1.2-1.9c-0.7-0.5-1.5-0.7-2.4-0.7c-1.2,0-2.2,0.5-3,1.5c-0.8,1-1.2,2.2-1.2,3.5
								c0,1.4,0.4,2.6,1.2,3.5c0.8,1,1.8,1.5,3,1.5c1,0,1.8-0.3,2.5-0.9c0.7-0.6,1-1.4,1.1-2.3h0.7c-0.1,1.2-0.5,2.1-1.3,2.8
								c-0.8,0.7-1.8,1.1-3,1.1C44.1,78.5,43,78,42,76.9z"/>
							<path class="st4" d="M58.7,78.3V67.5h7.1v0.7h-6.3v4.2h5.8V73h-5.8v4.6h6.3v0.7H58.7z"/>
							<path class="st4" d="M86.1,78.3V67.5h0.7v10.8H86.1z"/>
							<path class="st4" d="M99.1,78.3V68.2h-3.7v-0.7h8.2v0.7h-3.7v10.1H99.1z"/>
						</g>
					</g>
				</g>
			</svg>
			</div>
			<div class="d-flex flex-wrap">
				<div class="col-md-4 d-block d-md-none px-4">
					<img class="img-fluid mx-auto d-block w-100" src="img/footer.jpg" alt="chi siamo"/>
			  	</div>
				<div class="col-md-4 d-flex flex-column px-4 px-md-0 text-md-right pt-3 pt-md-0">
					<h3 class="titoletto mb-3 mb-lg-4">La nostra mission</h3>
					<p>Il nostro obiettivo è quello di riavvicinare sneakerheads e negozianti in un unico spazio digitale dove poter condividere la passione comune.</p>
					<div class="mt-auto d-none d-md-block">
						<div class="d-flex align-items-center justify-content-end">
						<a class="text-white" href="mailto:mktg@laceitapp.it">Contatti</a>&nbsp;&nbsp;-&nbsp;<a href="https://www.iubenda.com/privacy-policy/11613674" class="iubenda-black iubenda-embed text-white" title="Privacy Policy">Privacy policy</a>
						</div>
					</div>
			  </div>
			  <div class="col-md-4 d-none d-md-block">
					<img class="img-fluid mx-auto d-block" src="img/footer.jpg" alt="chi siamo"/>
			  </div>
			  <div class="col-md-4 px-4 px-md-0">
				  <h3 class="titoletto mb-3 mb-lg-4">La nostra storia</h3>
					<p>Siamo 4 ragazzi proprio come voi, con una grande passione per le sneakers e tutta la loro storia.</p>
				  	<p>Con il nostro progetto vogliamo semplificare il processo di ricerca ed acquisto, per una migliore esperienza per tutti noi! </p>
			  </div>
			</div>
			<div class="d-block d-md-none pt-3 text-center">
					<div class="d-flex align-items-center justify-content-center mb-3">
						<a class="text-white" href="mailto:mktg@laceitapp.it">Contatti</a>&nbsp;&nbsp;-&nbsp;<!--a href="https://www.iubenda.com/privacy-policy/11613674" class="iubenda-black iubenda-embed" title="Privacy Policy">Privacy policy</a-->
						<a href="https://www.iubenda.com/privacy-policy/11613674" class="iubenda-black no-brand iubenda-embed iub-body-embed" title="Privacy Policy">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
					</div>
			</div>
			<div class="text-center pt-0 pt-md-3 pb-2">seguici su&nbsp;
				<a href="https://www.instagram.com/laceitapp/?hl=it" class="" target="_blank">
					<svg class="" width="20" height="20" viewBox="0 0 35 35">
						<path class="instaWhite" d="M17.5,8.5c-5,0-9,4-9,9s4,9,9,9s9-4,9-9S22.5,8.5,17.5,8.5z M17.5,23.3c-3.2,0-5.8-2.6-5.8-5.8s2.6-5.8,5.8-5.8
						s5.8,2.6,5.8,5.8S20.7,23.3,17.5,23.3L17.5,23.3z M28.9,8.2c0,1.2-0.9,2.1-2.1,2.1c-1.2,0-2.1-0.9-2.1-2.1s0.9-2.1,2.1-2.1
						C28,6.1,28.9,7,28.9,8.2z M34.9,10.3C34.7,7.5,34.1,5,32.1,3c-2-2-4.5-2.7-7.3-2.8C21.8,0,13.2,0,10.3,0.1C7.5,0.3,5,0.9,2.9,2.9
						s-2.7,4.5-2.8,7.3C0,13.2,0,21.8,0.1,24.7C0.3,27.5,0.9,30,2.9,32c2.1,2,4.5,2.7,7.3,2.8c2.9,0.2,11.5,0.2,14.4,0
						c2.8-0.1,5.3-0.8,7.3-2.8c2-2,2.7-4.5,2.8-7.3C35,21.8,35,13.2,34.9,10.3L34.9,10.3z M31.1,27.8c-0.6,1.5-1.8,2.7-3.3,3.3
						c-2.3,0.9-7.8,0.7-10.3,0.7s-8,0.2-10.3-0.7c-1.5-0.6-2.7-1.8-3.3-3.3C2.9,25.5,3.2,20,3.2,17.5S3,9.5,3.9,7.2
						c0.6-1.5,1.8-2.7,3.3-3.3C9.5,2.9,15,3.2,17.5,3.2s8-0.2,10.3,0.7c1.5,0.6,2.7,1.8,3.3,3.3c0.9,2.3,0.7,7.8,0.7,10.3
						S32.1,25.5,31.1,27.8z"/>
					</svg>
				</a>
			</div>
			<div class="pt-4 text-center" style="font-size:14px;">
				Powered by&nbsp;<a class="text-white" style="text-decoration: underline;" href="http://www.efarmgroup.com/" target="_blank">eFarm Group</a>
			</div>
		</div>
    </footer>
	  
    
	  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!--script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script-->
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	  
	  <script>
		 $( document ).ready(function() {

			 $('form').on('submit', function (e) {

			  e.preventDefault();
				 
				 console.log ("invio");
				  $.ajax({
					type: 'post',
					url: 'salva.php',
					data: $('form').serialize(),
					success: function () {
					 $('form')[0].reset();
					  alert('I tuoi dati sono stati registrati correttamente.');
						
					}
				  });
			});
      });
    </script>
	  
	<script>
	$(document).ready(function(){
	  // Add smooth scrolling to all links
	  $("#lnk").on('click', function(event) {

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
		  // Prevent default anchor click behavior
		  event.preventDefault();

		  // Store hash
		  var hash = this.hash;

		  // Using jQuery's animate() method to add smooth page scroll
		  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 800, function(){

			// Add hash (#) to URL when done scrolling (default click behavior)
			window.location.hash = hash;
		  });
		} // End if
	  });
	});
	</script>  
	  
	<script>
	  var tag = document.createElement('script');
	  tag.src = "https://www.youtube.com/iframe_api";
	  var firstScriptTag = document.getElementsByTagName('script')[0];
	  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	  var player;
	  function onYouTubeIframeAPIReady() {
		player = new YT.Player('player', {
			videoId: 's-HFvxgW91A',
			playerVars: {
				modestbranding: 0,
				autoplay: 1,
				mute:1,
				controls: 0,
				showinfo: 0,
				wmode: 'transparent',
				branding: 0,
				rel: 0,
				autohide: 0,
				origin: window.location.origin
			},
			events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange
			}
		  });
		}
		function onPlayerReady(event) {
			event.target.playVideo();
		}
		function onPlayerStateChange(event) {
			var YTP=event.target;
           if(event.data===1){
                var remains=YTP.getDuration() - YTP.getCurrentTime();
                if(this.rewindTO)
                    clearTimeout(this.rewindTO);
                this.rewindTO=setTimeout(function(){
                     YTP.seekTo(0);
                 },(remains-0.1)*1000);
             }
		}
  </script>
  <script type="text/javascript">
	  (function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);
  </script>  
	  
	  
  </body>
</html>
