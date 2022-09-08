@extends('master', ['seo' => $seo, 'settings'=>$settings])
@section('content')

		
			<!-- start main -->
			<main role="main" class="page-404">
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

					<!-- start hero -->
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%" style="background-image: url({{asset('assets/user/img/intro_img/9.jpg')}});">
		<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title" style="color: #000;"><span>page</span> en cours de construction</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- end hero -->
<section class="section">
					<div class="container-fluid">
						<!-- start products list -->
						<div class="products-list">
							<!-- start item -->
							<div class="__item">
				

								<div class="__inner">
									<div class="row align-items-lg-center justify-content-sm-center">
										
										

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<div class="__text">
													<h3>Bonjour je suis Marc!</h3>
								<h3>Oops! <span>cette page est en cours de construction</span></h3>

								<p style="text-align: justify; color: #000;">
									<strong >Désolé, nous avons un développeur paresseux<br> mais en attendant je vous conseille d'essayer<br> nos délicieux pleurotes, vraiment ils sont TOP <br>N'hésitez pas à cliquer sur le bouton ci-dessous </strong>

								</p>
								<p>
															<a class="custom-btn custom-btn--medium custom-btn--style-1" href="/pleurotes">Pleurotes</a>
														</p>
								<h3>merci à la prochaine!</h3>
							</div>
											</div>
										</div>
										<div class="col-12 my-3 d-lg-none"></div>
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/products_img/1.png')}}" alt="Ahmed Hamdi"/>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- end item -->

							
						</div>
					</div>
				</section>
				<!-- end section -->
@endsection