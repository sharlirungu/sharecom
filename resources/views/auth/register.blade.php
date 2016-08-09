@extends('layouts.master')
@section('content')

@include('store._navbar')

	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Register</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class=" container">
    <div class=" register">
        <form role="form" method="POST" action="{{ url('/register') }}"> 
		    <div class="col-md-6 register-top-grid">
				<h3>Personal infomation</h3>
	            <div>
	                <span>Name</span>
                    <input type="text" placeholder="Name" name="name" value="{{ old('name') }}">
	                    @if ($errors->has('name'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('name') }}</strong>
	                        </span>
	                    @endif
	            </div>
	            <div>
	                <span>Email Address</span>
	                <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail">
	                @if ($errors->has('email'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('email') }}</strong>
	                    </span>
	                @endif
	            </div>
    			 <div>
					<span>Password</span>
                    <input type="password" placeholder="Password" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
<!--
                <a class="news-letter" href="#">
    			 <label class="checkbox"><input type="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                </a>
-->
            </div>
		</form>
	</div>
</div>

@endsection
