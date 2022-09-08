@extends('master', ['seo' => $seo, 'settings'=>$settings])
@section('content')


			<!-- start hero -->
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 40%" style="background-image: url({{asset('assets/user/img/intro_img/16.jpg')}});">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title"><span>à propos</span> ecomarc</h1>

							<p>
								Une expérience unique et ludique à partager avec vos proches.
								Soyez acteurs d'une économie circulaire et locale.
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
				<section class="section section--no-pb section--custom-01">
					<div class="container">
						<div class="section-heading">
							<h2 class="__title"><span>à propos</span> ecomarc</h2>
						</div>

						<div class="row">
							<div class="col-12 col-lg-6 col-xl-8">
										<p style="text-align: justify;">
												
												Fondé en 2018 par <a href="https://www.facebook.com/ahmed.hamdi.1257/">M.Ahmed HAMDI</a> , Ecomarc est l’une des entreprises tunisiennes lauréates de meilleurs projets Souk At-tnmia  .</p>
<p style="text-align: justify;">Soucieuse de répondre aux attentes des consommateurs les plus exigeants, la société se spécialise dans la production et la vente de pleurotes frais et déshydratés.
Cultivés naturellement, sans aucun pesticide ni produit de synthèse, les pleurotes Ecomarc se distinguent par leur fraîcheur et leur qualité supérieure.
											</p>

								<p style="text-align: justify;">
									- Première entreprise Tunisienne a utilisé le marc de café comme substrat pour la culture des pleurotes. <br>
- Premier vendeur pleurotes jaunes et roses <br>
- Premiers kits pleurotes <br>
- Premier engrais organique à base de marc de café
								</p>

								
									<a class="custom-btn custom-btn--medium custom-btn--style-1" href="/contacts">CONTACTEZ-NOUS</a>
								</p>
							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--no-pb ">
					<div class="container">
						

						<!-- start feature -->
						<div class="feature feature--style-1">
							<div class="__inner">
								<div class="row">
									<!-- start item -->
									<div class="col-6 col-sm-4 col-lg-3">
										<div class="__item  text-center" data-aos="fade" data-aos-delay="100" data-aos-offset="100">
											<i class="__ico">
												<img class="img-fluid  lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/feature_img/1.png')}}" alt="Découvrir ecomarc" />
											</i>

											<h5 class="__title">Découvrir</h5>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-6 col-sm-4 col-lg-3">
										<div class="__item  text-center" data-aos="fade" data-aos-delay="200" data-aos-offset="100">
											<i class="__ico">
												<img class="img-fluid  lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/feature_img/2.png')}}" alt="Commander chez Ecomarc" />
											</i>

											<h5 class="__title">Commander</h5>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-6 col-sm-4 col-lg-3">
										<div class="__item  text-center" data-aos="fade" data-aos-delay="300" data-aos-offset="100">
											<i class="__ico">
												<img class="img-fluid  lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/feature_img/3.png')}}" alt="Obtenez une boîte >Ecomarc" />
											</i>

											<h5 class="__title">Obtenez une boîte</h5>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-6 col-sm-4 col-lg-3">
										<div class="__item  text-center" data-aos="fade" data-aos-delay="400" data-aos-offset="100">
											<i class="__ico">
												<img class="img-fluid  lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/feature_img/4.png')}}" alt="Prendre plaisir!" />
											</i>

											<h5 class="__title">Prendre plaisir!
</h5>
										</div>
									</div>
									<!-- end item -->

									
								</div>
							</div>
						</div>
						<!-- end feature -->
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section section--custom-02">
					<div class="container">
						<div class="section-heading" data-aos="fade">
							<h2 class="__title">MIEU <span>QUE BIO</span></h2>
						</div>

						<!-- start timeline -->
						<div class="timeline">
							<div class="__inner">
								<div class="row">
									<!-- start item -->
									<div class="col-12 col-md-3">
										<div class="__item">
											<i class="__ico"></i>

											<div class="row">
												<div class="col-lg-11 col-xl-9">
													<p class="__year">01</p>

													<h5 class="__title">Respecter l’environnement et l’Homme </h5>
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-3">
										<div class="__item">
											<i class="__ico"></i>

											<div class="row">
												<div class="col-lg-11 col-xl-9">
													<p class="__year">02</p>

													<h5 class="__title">Préserver la santé sans renoncer au plaisir </h5>

													
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-3">
										<div class="__item">
											<i class="__ico"></i>

											<div class="row">
												<div class="col-lg-11 col-xl-9">
													<p class="__year">03</p>

													<h5 class="__title">Soutenir une agriculture biologique, novatrice et durable</h5>

												
												</div>
											</div>
										</div>
									</div>
									<!-- end item -->

									<!-- start item -->
									<div class="col-12 col-md-3">
										<div class="__item">
											<i class="__ico"></i>

											<div class="row">
												<div class="col-lg-11 col-xl-9">
													<p class="__year">04</p>

													<h5 class="__title">Agir concrètement pour une économie circulaire et responsable</h5>

												</div>
											</div>
										</div>
									</div>
									<!-- end item -->
								</div>
							</div>
						</div>
						<!-- end timeline -->
					</div>
				</section>
				<!-- end section -->
@endsection