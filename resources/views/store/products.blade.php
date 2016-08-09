@extends('layouts.master')
@section('content')
@include('store._navbar')

<div class="grow">
	<div class="container">
		<h2>Products</h2>
	</div>
</div>
<div class="pro-du">
	<div class="container">
		<div class="col-md-12 product1">
			<div class=" bottom-product">
				@foreach($subcategories as $product)
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="{{ URL::asset('products')}}/{{ $product->id }}"><img class="img-responsive" src="{{asset('image_uploads')}}/{{$product->image}}" alt="" style="width: 500px; height: 300px" >
								<div class="pro-grid">
									<span class="buy-in">Buy Now</span>
								</div>
							</a>
							<p class="tun"><span>{{$product->name}}</span><br>{{ substr($product->description,0,60).'...'}}</p>
							<div class="ca-rt">
								<a href="{{ URL::asset('products')}}/{{ $product->id }}" class="item_add"><p class="number item_price"><i> </i>Kes{{ number_format($product->price)}}</p></a>						
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				@endforeach
			</div>  					
		</div>
        <!--somethings go here-->
    </div>
</div>

@endsection