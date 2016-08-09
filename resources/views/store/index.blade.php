@extends('layouts.master')
@section('content')
@include('store._navbar')
<div class="banner">
	<div class="container">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					<div class="banner-text">
						<h3>Lorem Ipsum is   </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>		
					</div>
				</li>
				<li>
					<div class="banner-text">
						<h3>There are many  </h3>
						<p>Popular belief Contrary to , Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>									
					</div>		
				</li>
				<li>
					<div class="banner-text">
						<h3>Sed ut perspiciatis</h3>
						<p>Lorem Ipsum is not simply random text. Contrary to popular belief, It has roots in a piece of classical Latin literature from 45 BC.</p>
					</div>
				</li>
			</ul>
		</div>
		</div>
</div>
		<!--content-->
		<div class="container">
			<div class="content-top">
				<h1>NEW PRODUCTS</h1>
				<div class="grid-in">
					@foreach($products as $product)
						<div class="col-md-3 grid-top simpleCart_shelfItem">
							<a href="products/{{$product->id}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="image_uploads/{{$product->image}}" alt="" style="width: 271px; height: 324px">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-left 	b-delay03 ">
										<span>{{ $product->name }}</span>
									</h3>
								</div>
							</a>
						
							<p><a href="products/{{$product->id}}">{{ $product->name }}</a></p>
							<a href="products/{{$product->id}}" class="item_add"><p class="number item_price"><i> </i>Kes{{ number_format($product->price)}}</p></a>
						</div>
					@endforeach
				</div>

	</div>
</div>

<script src="{{asset('js/responsiveslides.min.js')}}"></script>
<script>
   $(function () {
     $("#slider").responsiveSlides({
       	auto: true,
   	    nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
    });
  });
</script>
@endsection