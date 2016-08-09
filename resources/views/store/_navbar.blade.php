<div class="container">
	    <div class="head-top">
			<div class="logo">
				<h1><a href="/">Company Name</a></h1>
			</div>
            <div class=" h_menu4">
			    <ul class="memenu skyblue">
                @foreach($subsub as $cat)
				    <li class="grid"><a class="color2" href="#">{{$cat->name}}</a>
					  	<div class="mepanel">
						    <div class="row">
                                <div class="col1">
								    <div class="h_nav">
                                        <ul>
                                            @if($cat->category)
                                                @foreach($cat->category as $subcat)
                                                    <li><a href="{{URL::asset('products/category')}}/{{ $subcat->id }}">{{ $subcat->name }}</a></li>
                                                @endforeach
                                            @endif    
                                        </ul>		
								    </div>							
							    </div>
						    </div>
						</div>
			        </li>
                @endforeach
<!--				    <li><a class="color4" href="{{URL::asset('login')}}">Login</a></li>				
				    <li><a class="color6" href="contact.html">Contact</a></li>
-->
			     </ul> 
    		</div>	
		<div class="clearfix"> </div>
	</div>
</div>