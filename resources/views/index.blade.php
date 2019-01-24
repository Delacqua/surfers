 @extends('main')
 
 @section('content')

<section id="products" class="container products" ng-controller="products">

	<div class="card" >

		 	<div class="row" id="product<%card.id%>">

		 		<div class="col-9 col-md-5 d-flex align-self-stretch no-gutter">

		 			<div class="products-imgMain backgroundImgMain d-flex justify-content-center flex-column align-items-center">
		 				​<picture>
		 					<img class="img-responsive" id="imgMain" ng-src="img/products/<%card.img[0]%>.png" alt="<%card.img%>" />
		 				</picture>

		 			</div>

		 		</div>

		 		<div class="col-3 col-md-2 d-flex align-self-stretch no-gutter">
		 			<div class="products-thumb d-flex justify-content-center flex-column align-items-center">

		 				<div ng-repeat = "imgTemp in card.img track by $index">
			 				​<picture>
			 					<img class="img-responsive" id="thumbP" ng-src="img/products/<%imgTemp%>.png" alt="<%imgTemp%>" />
			 				​</picture>
		 				</div>

		 			</div>
		 		</div>

		 		<div class="col-12 col-md-5 sfondoDescription">

		 			<div class="row description-destra">

		 				<div class="col-9" >
		 					<div class="products-name">
		 						<h3><%card.name%></h3>
		 					</div>
		 				</div>


		 				<div class="col-3 no-gutter">

		 					<div class="products-nav d-flex flex-row-reverse">
		 						<div class="products-nav-box" ng-click="next(card.id)">
		 							<i class="fas fa-arrow-right"></i>
		 							<span class="sr-only">Next</span>
		 						</div>

		 						<div class="products-nav-box" ng-click="preview(card.id)">
		 							<i class="fas fa-arrow-left"></i>
		 							<span class="sr-only">Preview</span>
		 						</div>
		 					</div>

		 					<div class="d-flex flex-row-reverse">
		 						<div class="products-nav-page">
		 							<div><spam id="page"><%("0"+page).slice(-4)%></spam> / <spam id="npages"><%("0"+products.length).slice(-4)%></spam></div>
		 						</div>
		 					</div>

		 				</div>


		 			</div>

		 			
		 			<div class="products-rate">
		 				
		 				<div class="col-12 d-inline-flex">
		 					<div ng-repeat="x in [].constructor(card.rate) track by $index">
		 						<i class="fas fa-star" id="starColorActive"></i>	
		 					</div>
		 					<div ng-repeat="x in [].constructor(5-card.rate) track by $index">
		 						<i class="far fa-star" id="starColor"></i>
		 					</div>				
		 				</div>

		 			</div>

		 			<div class="products-button">
		 				
		 				<div class="col-12">
		 					<button href="#" class="changeDescrip active" id="description"><span class="sr-only">(current)</span>
		 						description
		 					</button>
		 					<button href="#" class="changeDescrip" id="features">
		 						features
		 					</button>
		 					<button href="#" class="changeDescrip" id="dimension">
		 						dimension
		 					</button>
		 				</div>
		 				
		 			</div>

		 			<div class="products-description">
		 				
		 				<div class="col-12">
		 					<p class="" id="descriptionT"><%card.description%></p>

		 					<p class="d-none" id="featuresT"><%card.features%></p>

		 					<p class="d-none" id="dimensionT"><%card.dimensions%></p>
		 				</div>

		 			</div>

		 			<div class="products-buy">
		 				
		 				<div class="col-12 d-flex flex-row align-items-center">
		 					<div class="products-price"> $ <%card.price%> </div>

		 					<button type="button" class="btn btn-info">BUY NOW</button>

		 				</div>

		 			</div>

		 			<div class="products-all">
		 				<div class="col-12">
		 					<a href="/produtos">
		 						View All Boards
		 					</a>
		 				</div>						
		 			</div>

		 			
		 		</div>

		 	</div>

	</div>

</section>


@stop