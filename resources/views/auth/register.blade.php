
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/opensans-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/line-awesome/css/line-awesome.min.css')}}">
	<!-- Jquery -->
	<link rel="stylesheet" href="{{asset('assets/https://jqueryvalidation.org/files/demo/site-demos.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
</head>
<body class="form-v7">
	<div class="page-content">
		<div class="form-v7-content">
			<div class="form-left">
				<img src="{{asset('assets/images/todo2.jpg')}}" alt="form">
				<p class="text-1">Sign Up</p>
				<p class="text-2">Privaci policy & Term of service</p>
            </div>
			<form class="form-detail" action="{{route('register')}}" method="post" id="myform">
            @csrf
				<div class="form-row">
					<label for="name">USERNAME</label>
          <input type="text" name="name" id="name" class="input-text @error('name') is-invalid @enderror">
          @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror
				</div>
				<div class="form-row">
					<label for="email">E-MAIL</label>
          <input type="text" name="email" id="email" class="input-text @error('email') is-invalid @enderror" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
          @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror
				</div>
				<div class="form-row">
					<label for="password">PASSWORD</label>
          <input type="password" name="password" id="password" class="input-text @error('password') is-invalid @enderror" required>
          @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror
				</div>
				<div class="form-row">
					<label for="comfirm_password">CONFIRM PASSWORD</label>
					<input type="password" name="password_confirmation" id="comfirm_password" class="input-text" required>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
					<p>Or<a href="#">Sign in</a></p>
				</div>
			</form>
		</div>
	</div>
	<script src="{{asset('assets/https://code.jquery.com/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('assets/https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js')}}"></script>
	<script src="{{asset('assets/https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js')}}"></script>
	<!-- <script>
    @stack('master')
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    your_email: {
			      	required: true,
			      	email: true
			    },
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		username: {
		  			required: "Please enter an username"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please provide a password"
		  		},
		  		comfirm_password: {
		  			required: "Please provide a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>