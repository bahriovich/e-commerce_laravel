@extends('master', ['seo' => $seo, 'settings'=>$settings])
@section('content')
@php
	function settingContact(array $settings, $key){return $settings[array_search($key, array_column($settings, 'meta_name'))]['meta_desc'];}
	$setting = 'settingContact';
@endphp


			<!-- start hero -->
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 55%" style="background-image: url({{asset('assets/user/img/intro_img/7.jpg')}});">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title"><span>Ecomarc</span> Contactez-nous</h1>

							<p>
								Vous pouvez nous contacter directement par email, téléphone ou courrier.<br>
								Pour ne manquer aucune actualité, suivez-nous sur nos réseaux sociaux.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end hero -->

			<!-- start main -->
			<main role="main">
				<!-- Common styles
				================================================== -->
				<link rel="stylesheet" href="{{asset('assets/user/css/style.min.css')}}" type="text/css">

				<!-- Load lazyLoad scripts
				================================================== -->
				<script>
					(function(w, d){
						var m = d.getElementsByTagName('main')[0],
							s = d.createElement("script"),
							v = !("IntersectionObserver" in w) ? "8.17.0" : "10.19.0",
							o = {
								elements_selector: ".lazy",
								data_src: 'src',
								data_srcset: 'srcset',
								threshold: 500,
								callback_enter: function (element) {

								},
								callback_load: function (element) {
									element.removeAttribute('data-src')

									oTimeout = setTimeout(function ()
									{
										clearTimeout(oTimeout);

										AOS.refresh();
									}, 1000);
								},
								callback_set: function (element) {

								},
								callback_error: function(element) {
									element.src = "https://placeholdit.imgix.net/~text?txtsize=21&txt=Image%20not%20load&w=200&h=200";
								}
							};
						s.type = 'text/javascript';
						s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
						s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
						m.appendChild(s);
						// m.insertBefore(s, m.firstChild);
						w.lazyLoadOptions = o;
					}(window, document));
				</script>

				<!-- start section -->
				<section class="section" style="background-color: #FFF;background-image: url({{asset('assets/user/img/intro_img/background.png')}})">
					<div class="container">
						<!-- start company contacts -->
						<div class="company-contacts  text-center" >
							<div class="__inner">
								<div class="row justify-content-around">
									<!-- start item -->
									<div class="col-12 col-md-4 col-lg-3">
										<div class="__item">
											<i class="__ico fontello-location"></i>

											<h4 class="__title">adresse</h4>

											<p>
												{{$setting($settings, 'adresse')}}
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-4 col-lg-3">
										<div class="__item">
											<i class="__ico fontello-phone"></i>

											<h4 class="__title">téléphone</h4>

											<p>
												+(216) {{$setting($settings, 'telephone')}}
											</p>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-4 col-lg-3">
										<div class="__item">
											<i class="__ico fontello-mail-1"></i>

											<h4 class="__title">e-mail</h4>

											<p><a href="mailto:info@ecomarc.tn">{{$setting($settings, 'email')}}</a></p>
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end company contacts -->
					</div>
				</section>
				<!-- end section -->

			
			<!-- end main -->

@endsection