@extends('layouts.master')
@section('content')

@include('store._navbar')
<div class="container">
	<div class="account">
    	<div class="account-pass">
	    	<div class="col-md-8 account-top">
		    	<form method="POST" role="form" action="{{ url('/login') }}">	
                {!! csrf_field() !!}		
			        <div> 	
                        <span>Email</span>
                        <input type="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif 
			        </div>

			        <div> 
                        <span >Password</span>
                        <input type="password">
                    </div>				
                    <input type="submit" value="Login"> 
                    
                </form>
            </div>
            <div class="clearfix"> </div><br><br>
            <a href="{{URL('register')}}" class="create">Create an account</a>
		</div>
	    <div class="clearfix"> </div>
	</div>
</div>
</div>
@endsection