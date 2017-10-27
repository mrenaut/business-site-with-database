@extends('layouts.app')


@section('employeeLogin')
<div class="container-fluid" id="login">	
	<div class="panel panel-default" id="loginPanel">
		<div class="panel-heading">
			<h3 class="panel-title">Employee Login</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<div class="form-group">
					<label for="exampleInputPassword1">Username</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">

				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>

			</div>
		</div>
	</div>

</div>



@endsection