@extends('new_frontend.master_file.master')
@section('body_section')
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Register/Login</h3>	
	<hr class="soft">
	
	<div class="row">
            @if (session()->has('success'))
            <div class="alert alert-success" style="color: black" style="background-color: #3aaf3e">
                {{ session()->get('success') }}
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
	
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form  action="{{ route('Login') }}" method="POST">

                @csrf


			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3" type="text" name="email" id="inputEmail" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" class="span3" name="password" id="inputPassword" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Sign in</button> <a href="forgetpass.html">Forget password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
		<div class="span4">
			<div class="well">
			<h5>CREATE YOUR ACCOUNT</h5><br>
			Enter information to create an account.<br><br><br>
			<form action="{{ route('user_registration') }}"  method="POST">

                @csrf

			  <div class="control-group">
				<label class="control-label">User Name</label>
				<div class="controls">
				  <input class="span3" type="text" id="inputEmail0" name="name" placeholder="User Name" required>
				</div>
			  </div>

              <div class="control-group">
				<label class="control-label" for="inputEmail0">E-mail address</label>
				<div class="controls">
				  <input class="span3" type="email" name="email" placeholder="Email Address" required>
				</div>
			  </div>
              <div class="control-group">
				<label class="control-label" for="inputEmail0">Mobile Number</label>
				<div class="controls">
				  <input class="span3" type="text" name="contact" placeholder="Mobile Number" required>
				</div>
			  </div>
              <div class="control-group">
				<label class="control-label" for="inputEmail0">Customer Address</label>
				<div class="controls">
				  <input class="span3" type="text" name="address" placeholder="Customer Address" required>
				</div>
			  </div>
              <div class="control-group">
				<input type="radio" value="Male" name="gender" id="male" class="with-gap" required>
                    <label for="male">Male</label>
                    <input type="radio" value="female" name="gender" id="female" class="with-gap" required>
                    <label for="female" class="m-l-20">Female</label>
			  </div>
              <div class="control-group">
				<label class="control-label" for="Password">Password</label>
				<div class="controls">
				  <input class="span3" type="Password" name="password" minlength="6" placeholder="Password" required>
				</div>
			  </div>

			  <div class="controls">
			  <button type="submit" class="btn block">Create Your Account</button>
			  </div>
              
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
	</div>	
</div>
@endsection