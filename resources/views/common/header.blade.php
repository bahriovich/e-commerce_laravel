<!DOCTYPE html>
<html class="no-js" lang="en">
@php
    function setting(array $settings, $key){return $settings[array_search($key, array_column($settings, 'meta_name'))]['meta_desc'];}
    $setting = 'setting';
@endphp
	<head>
		<title>Ecomarc |  {{$seo[0]['meta_title']}} </title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />
		<meta name="author" content="procreagency web service" />
		<meta name="theme-color" content="#dca627" />
		<meta name="msapplication-navbutton-color" content="#dca627" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#dca627" />
        <meta name="description" content=""/>
        <meta name="title" content="" />
        <meta property="og:description" content="">
        <meta property="og:title" content="">
		<meta property="og:type" content="website" />

<meta property="og:url" content="https://ecomarc.tn/" />
<meta property="og:site_name" content="Ecomarc" />
<meta property="og:image" content="{{asset('assets/user/img/site_logo-01.png')}}" />
<meta property="og:image:width" content="512" />
<meta property="og:image:height" content="512" />
<meta property="og:locale" content="fr_FR" />
		<!-- Favicons
		================================================== -->
        <link rel="shortcut icon" href="{{$setting($settings, 'favicon')}}"> <!-- href="/img/favicon.ico" -->
		<link rel="apple-touch-icon" href="{{$setting($settings, 'apple-touch-icon')}}"> <!--  href="/img/apple-touch-icon.png" -->
		<link rel="apple-touch-icon" sizes="72x72" href="{{$setting($settings, 'apple-touch-icon-72')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{$setting($settings, 'apple-touch-icon-114')}}">

		<!-- Critical styles
		================================================== -->
		<link rel="stylesheet" href="{{asset('assets/user/css/critical.min.css')}}" type="text/css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3VT0D4DDM4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3VT0D4DDM4');
</script>
		<!-- Load google font
		================================================== -->
		<script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Open+Sans:300,400,500,600,700,800', 'Raleway:100,400,400i,500,500i,700,700i,900'] }
			};
			(function() {
				var wf = document.createElement('script');
				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);
			})();
		</script>

		<!-- Load other scripts
		================================================== -->
		<script type="text/javascript">
			var _html = document.documentElement,
				isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

			_html.className = _html.className.replace("no-js","js");
			_html.classList.add( isTouch ? "touch" : "no-touch");
		</script>
		<script type="text/javascript" src="{{asset('assets/user/js/device.min.js')}}"></script>


		
        <link rel="stylesheet" href="{{asset('assets/user/shop_sidebar/css/style.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



				<script src="{{asset('assets/user/shop_sidebar/js/jquery.min.js')}}"></script>
				<script src="{{asset('assets/user/shop_sidebar/js/popper.js')}}"></script>
				<script src="{{asset('assets/user/shop_sidebar/js/bootstrap.min.js')}}"></script>
				<script src="{{asset('assets/user/shop_sidebar/js/main.js')}}"></script>
	</head>

	<body>
	
		 <div id="app">

			<!-- start header -->
			<header id="top-bar" class="top-bar top-bar--style-1">
					<div class="top-bar__bg" style="background-image: url({{asset('assets/user/img/home_img/home_3_bg.jpg')}});background-size: cover;background-repeat: no-repeat;background-position: 40% bottom;"></div>


				<div class="container-fluid">
					<div class="row align-items-center justify-content-between no-gutters">

						<a class="top-bar__logo site-logo" href="/">
							<img class="img-fluid" src="{{asset('assets/user/img/site_logo-01.png')}}" alt="Ecomarc logo" />
						</a>

						<a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler top-bar__navigation-toggler--light" href="javascript:void(0);"><span></span></a>

						<div id="top-bar__inner" class="top-bar__inner">
							<div>
								<nav id="top-bar__navigation" class="top-bar__navigation navigation" role="navigation">
									<ul>
										<li class="{{Route::currentRouteName() == 'index' ? 'active' : ''}}">
											<a href="/">Accueil</a>

											
										</li>

										<li class="{{Route::currentRouteName() == 'ecomarc' ? 'active' : ''}}">
											<a href="/ecomarc">Ecomarc</a>
										</li>

									

										<li class="has-submenu">
											<a href="javascript:void(0);">Produits</a>

											<ul class="submenu">
												<li class="{{Route::currentRouteName() == 'pleurotes' ? 'active' : ''}}"><a href="/pleurotes">Pleurotes</a></li>
												<li class="{{Route::currentRouteName() == 'fruit' ? 'active' : ''}}"><a href="/404">Fruits et légumes</a></li>
										
											</ul>
										</li>

										<li class="{{Route::currentRouteName() == 'shop' ? 'active' : ''}}">
											<a href="/shop">Shop</a>
										</li>

										<li class="{{Route::currentRouteName() == 'shop' ? 'active' : ''}}">
											<a href="/shop">Cart</a>
										</li>

										<li class="{{Route::currentRouteName() == 'contacts' ? 'active' : ''}}">
											<a href="/contacts">Contactez-nous</a>
										</li>

										<li class="{{Route::currentRouteName() == 'contacts' ? 'active' : ''}}">
											<a href="/login">login</a>
										</li>
											

											
									</ul>
								</nav>
							</div>
						</div>

					</div>
				</div>
			</header>