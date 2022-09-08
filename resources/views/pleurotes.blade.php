@extends('master', ['seo' => $seo, 'settings'=>$settings])
@section('content')


			<!-- start hero -->
			<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 40%" style="background-image: url({{asset('assets/user/img/intro_img/10.jpg')}});">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-7">
							<h1 class="__title"><span>ECOMARC<br></span> PLEUROTES</h1>

							<p>
								La façon dont vos aliments sont cultivés peut avoir un impact majeur sur votre santé ainsi que sur l’environnement.
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
				<section class="section section--gray-bg">
					<div class="container">
						<div class="simple-text-block">
							<div class="row justify-content-lg-center row--lg-middle">
								<div class="col-lg-10">

									<h2><span>C'est quoi</span> un pleurote</h2>

									<div class="row justify-content-lg-between no-gutters">
										<div class="col-12 col-lg-6">
											<p style="text-align:justify;">
												Le pleurote est apprécié pour sa saveur aromatique. En outre, ce champignon se réduit peu pendant sa préparation.
Les pleurotes ont un chapeau plat en forme d’éventail, sur une tige courte. La couleur du chapeau varie du beige clair au gris clair. Des pleurotes jaunes et roses sont également cultivés, mais dans une moindre mesure. 
 

											</p>
											<p style="text-align:justify; color: #5b8f3f;"><strong>Caractéristiques du pleurote :</strong></p>

											<p style="text-align:justify;">
												il pousse d'octobre à mars sur les bois morts ou les troncs de feuillus, comme le chêne ou le charme. <br>
												<b>On en distingue trois espèces qui sont d'excellents comestibles : </b><br><b style="color: #dca627;">
												<span>-</span> le pleurote corne d'abondance : </b> son chapeau mesure en moyenne 12 cm de diamètre et affiche des couleurs claires, du blanc au crème brunâtre. <br>
											    <b style="color: #dca627;">
												<span>-</span> le pleurote en forme d'huître ou "en coquille" : </b> ce champignon possède un chapeau lisse et gras au toucher, dont la couleur varie du gris sombre au brun beige. <br>
												<b style="color: #dca627;">
												<span>-</span> le pleurote du Panicaut : </b> ce champignon possède un chapeau lisse et gras au toucher, dont la couleur varie du gris sombre au brun beige. <br>

											</p>
										</div>

										<div class="col-12 my-3 d-lg-none"></div>

										<div class="col-12 col-lg-5">
											<img class="img-fluid  lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/img_4.jpg')}}" alt="Caractéristiques du pleurote" />
										</div>
									</div>

								
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<section class="section">
					<div class="container-fluid">
						<div class="product-features">
							<!-- start item -->
							<div class="__item">
								<div class="__inner">
									<div class="row justify-content-sm-center">
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<h3 class="__title">COMMENT LES CONSOMMER ?</h3>

												<div>
													<p style="text-align: justify;">
														Nettoyez vos champignons avec un papier de cuisine ou une brosse douce, juste avant de les préparer. Leur nettoyage se fait toujours à sec : si vous les mouillez, ils se gorgent d’eau et perdent leur saveur. 
													</p>

													<p style="text-align: justify;">
														Coupez le pied. En fonction de votre plat, coupez vos pleurotes en lanières ou laissez-les entiers. La chair du pleurote est tendre et ne doit être chauffée que quelques minutes, sinon elle perd sa fermeté.
													</p>

													<p style="text-align: justify;">
														Ce champignon est délicieux avec des plats de viande, avec une sauce à la crème et des pâtes, mais aussi dans des salades tièdes.
													</p>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/product-features_img/1.jpg')}}" alt="Pleurotes Bio et frais"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="__item">
								<div class="__inner">
									<div class="row justify-content-sm-center">
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<h3 class="__title">COMMENT LE CHOISIR ET LE CONSERVER ?</h3>

												<div>
													<p style="text-align: justify;">
														Choisissez des pleurotes fermes, non visqueux et charnus. Ne rangez pas vos champignons à côté de légumes très odorants, comme des poireaux ou des oignons, car ils absorbent facilement les odeurs. 
													</p>

													

													<p style="text-align: justify;">
														Sachez également qu’à proximité de fruits et d’agrumes, les champignons vieillissent plus vite. Vous pouvez les surgeler, mais il faut au préalable les blanchir ou les faire sauter. Vous pourrez alors les conserver trois mois environ.
													</p>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/product-features_img/2.jpg')}}" alt="Pleurotes conservés"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div id="sante" class="__item">
								<div class="__inner">
									<div class="row justify-content-sm-center">
										<div class="col-12 col-md-9 col-lg-6">
											<div class="__content">
												<h3 class="__title">À votre santé</h3>

												<div>
													<p style="text-align: justify;">
														Côté santé, le pleurote est connu pour ses vertus antioxydantes. 
													</p>
													<ol>
														<li style="text-align: justify;">Il participe ainsi à prévenir certaines pathologies cardiovasculaires comme l’hypertension, mais aussi le diabète. </li>
														<li>Interdum finibus. Vestibulum ante ipsum primis.</li>
														<li style="text-align: justify;">Certaines études scientifiques ont montré que certains principes actifs du pleurote aidaient à lutter contre les cellules cancéreuses et permettrait de prévenir et même de ralentir l’évolution de la maladie d’Alzheimer. </li>
														<li style="text-align: justify;">Ils n’ont par contre pas réussi à identifier réellement ce principe actif ou à prouver de manière certaine cette simple constatation. </li>
													</ol>

													<p style="text-align: justify;color: #5b8f3f;"><b>
														Le pleurote, élixir de jeunesse ?</b>
													</p>

													<p style="text-align: justify;">
														Les pleurotes ont d’autres vertus médicinales : ils ont des propriétés hématologiques, antivirales, antibiotiques, et antibactériennes. Les molécules bioactives isolées des différents champignons sont des polysaccharides.								</p>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-9 col-lg-6">
											<div class="__image">
												<img class="img-fluid lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/product-features_img/3.jpg')}}" alt="Plat avec pleurotes"/>
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

				
			
			<!-- end main -->
@endsection