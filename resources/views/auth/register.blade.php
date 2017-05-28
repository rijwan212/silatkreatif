<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="csslogin/login.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="jslogin/login.js"></script>
</head>
<body>

<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="POST" action="{{ route('register') }}">
           {{ csrf_field() }}
		 
			<fieldset>
				<h2>Please Register</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="name" name="name" id="name" class="form-control input-lg" placeholder="nama anda" value="{{ old('name') }}" required autofocus>
                     @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
				</div>
				<div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="email anda" value="{{ old('email') }}" required>
                    
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				</div>
				<div class="form-group">
                    <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" placeholder="Confirmation Password"required>
				</div>
				
				<hr class="colorgraph">
				<div class="row">
					
					<div class="form-group">
						<div class="col-xs-6 col-sm-6 col-md-6">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Register</a>
                           
                                
                                </button>
                           </div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>


</body>
</html>