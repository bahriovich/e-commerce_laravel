<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="csrf-token" content="{{ csrf_token() }}">

    	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('assets/user/shop_sidebar/css/style.css')}}">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

		
        <style>
            /*apply css properties to button tag*/
  
            .button1 {
                width: 52px;
                height: 23px;
                font-size: 10px;
                background-color: green;
                color: honeydew;
            }
  
            /*apply hover effect to button tag*/
  
            .button1:hover {
                background-color: greenyellow;
                color: grey;
            }
  
            /*apply css properties to h2 tag*/
  
            .h21 {
				
                color: black;
                margin: 0px 4px 0px 7px;
				margin-top: 7px;
                font-size: 27px;
            }
            /*apply css properties to h1 tag*/
  
            h1 {
                font-size: 35px;
                color: green;
                text-align: center;
                padding-left: 10%;
            }
			.input-group-text{
				width:90px;
			}
			.input-group-text .p{
				width:100px;
			}



						
			.input-number-group {
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-justify-content: center;
				-ms-flex-pack: center;
					justify-content: center;
			}

			.input-number-group input[type=number]::-webkit-inner-spin-button,
			.input-number-group input[type=number]::-webkit-outer-spin-button {
			-webkit-appearance: none;
					appearance: none;
			}

			.input-number-group .input-group-button {
			line-height: calc(80px/2 - 5px);
			}

			.input-number-group .input-number {
			width: 80px;
			padding: 0 12px;
			vertical-align: top;
			text-align: center;
			outline: none;
			display: block;
			margin: 0;
			}

			.input-number-group .input-number,
			.input-number-group .input-number-decrement,
			.input-number-group .input-number-increment {
			border: 1px solid #cacaca;
			height: 40px;
			-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
					user-select: none;
			border-radius: 0;
			}

			.input-number-group .input-number-decrement,
			.input-number-group .input-number-increment {
			display: inline-block;
			width: 40px;
			background: #e6e6e6;
			color: #0a0a0a;
			text-align: center;
			font-weight: bold;
			cursor: pointer;
			font-size: 2rem;
			font-weight: 400;
			}

			.input-number-group .input-number-decrement {
			margin-right: 0.3rem;
			}

			.input-number-group .input-number-increment {
			margin-left: 0.3rem;
			}


        </style>

</head>
<body>

@extends('master', ['seo' => $seo, 'settings'=>$settings])
@section('content')

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

	<!-- start main -->
	<main role="main" class="page-404">
	<!-- Common styles================================================== -->
	<link rel="stylesheet" href="{{asset('assets/user/css/style.min.css')}}" type="text/css">

	<!-- Load lazyLoad scripts================================================== -->
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



	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="fa fa-bars"></i>
					<span class="sr-only">Toggle Menu</span>
				</button>
			</div>
			<div class="p-4 pt-5">
				<h1>Catégories</h1>
				@foreach($categories as $category) 	
				<ul class="list-unstyled components mb-5">
					<li class="active">
						<a aria-expanded="false" href="{{url('/shop/'.$category->id)}}">{{$category->name}}</a>
						@if(!empty($category->subcategory))	
						<ul class="list-unstyled components mb-5">
						@foreach($category->subcategory as $sub) 	
							<li >
								<a aria-expanded="false" href="{{url('/shop/'.$sub->id)}}">{{$sub->name}}</a>
							</li>
						@endforeach
						</ul>
						@endif 
					</li>
				</ul>
				@endforeach 
			</div>
		</nav>

		
		<!-- Page Content  -->
		<div id="content" class="container p-4 p-md-5 pt-5">
			<!-- start section -->
			<section id="decouvrir" class="section ">
				<div class="container">
					<div class="section-heading text-center" data-aos="fade">
						<h2 class="__title">Economie <span>circulaire</span></h2>
						<p style="color: #000;">Faites pousser de délicieux champignons bio en 10 jours dans votre cuisine, tout simplement</p>
					</div>
					<!-- start posts -->
					<div class="posts posts--style-1">
						<div class="__inner">
							<div class="row">
							<!-- start item -->
							@foreach($produits as $product)  
								<div class="col-12 col-sm-6 col-lg-4">
									<div class="__item __item--preview" data-aos="flip-up" data-aos-delay="100" data-aos-offset="0">							
										<figure class="__image">
											<img class="lazy" src="/uploads/{{$product->image_p}}" data-src="/uploads/{{$product->image_p}}" alt="Pleurotes" />
										</figure>
										<div class="__content" style="position: relative;">
											<h3 class="__title h5">{{ $product->name }}</h3>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-square btn-success m-2" data-toggle="modal" data-target="#exampleModalCenter_{{ $product->id }}" style="position: absolute; bottom: 0px; width: 93%; left: 0; right: 0; font-size: 2rem; line-height: 2;">
											ajouter au panier<img src="{{asset('assets/img/ajouter-un-panier.png')}}">
											</button>
											<!--	<div style="font-size: 30px;line-height: 70px;color: #c70a0a;left: 6px;bottom: 0px;position: absolute;">	<h3 style="color: #c70a0a;">{{ $product->prix_poids }}Kg /{{ $product->prix_price }}$<br><br></h3> </div> -->
											<h3 style="font-size: 30px;line-height: 70px;color: #000000;">{{ $product->prix_poids }}Kg /{{ $product->prix_price }}$<br><br></h3> 
											<!--	<p style="font-size: 36px;line-height: 36px;color: #c70a0a">{{ $product->prix_poids }}<br><br></p> <p style="font-size: 30px;line-height: 70px;color: #c70a0a; left:0;">{{ $product->prix_poids }}Kg /{{ $product->prix_price }}$<br><br></p> -->
										</div>	
									</div>
								</div>
							@endforeach   
							<!-- end item -->
							</div>
						</div>
					</div>
				<!-- end posts -->
				</div>
			</section>
			<!-- end section -->


			@foreach($produits as $product) 
			<!-- Modal -->
			<div class="modal fade produit_data" id="exampleModalCenter_{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
				
					<div class="modal-content" data-target="#mimodalejemplo_{{ $product->id }}">
						<div class="modal-header" >
							<h5 class="modal-title" id="exampleModalLongTitle">{{ $product->name }}</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">


							<table class="table table-striped">
								<thead>
									<tr>
									<th scope="col">Poids</th>
									<th scope="col">Prix</th>
									<th scope="col">Quantité</th>
									<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									<th>{{ $product->prix_poids }} Kg</th>
									<td>{{ $product->prix_price }} €</td>
									<td>
										<div class="input-group input-number-group">
											<input type="hidden" value="{{$product->price_id}}" class="price_id">  
											<input type="hidden" value="{{$product->id}}" class="produit_id">  
											<div class="input-group-button">
												<span class="input-number-decrement">-</span>
											</div>
											<input class="input-number qty_input" type="number" id="counting" value="1" min="0" max="1000">
											<div class="input-group-button">
												<span class="input-number-increment">+</span>
											</div>
										</div>
									</td>
									<td>
										<button type="button" class="btn btn-info m-2 addToCartBtn">Add To Cart</button>
									</td>
									
									</tr>
								</tbody>
							</table>

						</div>	
					</div>
					
				</div>
			</div>

		@endforeach


			
		</div>

	</div>


	




				<script src="{{asset('assets/user/shop_sidebar/js/jquery.min.js')}}"></script>
				<script src="{{asset('assets/user/shop_sidebar/js/popper.js')}}"></script>
				<script src="{{asset('assets/user/shop_sidebar/js/bootstrap.min.js')}}"></script>
				<script src="{{asset('assets/user/shop_sidebar/js/main.js')}}"></script>

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
				<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


				<script>
					//initialising a variable name data
					var data = 0;
		
					//printing default value of data that is 0 in h2 tag
					document.getElementById("counting").innerText = data;
		
					//creation of increment function
					function increment() {
						data = data + 0.5;
						document.getElementById("counting").innerText = data;
					}
					//creation of decrement function
					function decrement() {
						data = data - 0.5;
						document.getElementById("counting").innerText = data;
					}


					$('.input-number-increment').click(function() {
						var $input = $(this).parents('.input-number-group').find('.input-number');
						var val = parseInt($input.val(), 10);
						$input.val(val + 1);
						});

						$('.input-number-decrement').click(function() {
						var $input = $(this).parents('.input-number-group').find('.input-number');
						var val = parseInt($input.val(), 10);
						$input.val(val - 1);
					})






					$(document).ready(function() {
						$('.addToCartBtn').click(function (e){
							e.preventDefault();

							var product_id = $(this).closest('.produit_data').find('.produit_id').val(); 
							var product_qty = $(this).closest('.produit_data').find('.qty_input').val();
							var product_price = $(this).closest('.produit_data').find('.price_id').val();

alert(product_id+','+product_qty+','+product_price);
// id prix

							$.ajaxSetup({
								headers: {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								}
							});


							$.ajax({
								method: "POST",
								url: "/add-to-cart",
								data: {
									'product_id' : product_id,
									'product_qty' : product_qty,
									'product_price' : product_price,
								},
								success: function(response) {
									console.log(response);
									alert(response.status); 	
								}
							});

						});
					});


				</script>

@endsection





</body>
</html>