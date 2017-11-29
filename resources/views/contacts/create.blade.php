

@extends('layouts.app')

@section('form')

	<div class="container" id="form">
		
		
         <h1>Get a Quote!</h1>
         <h5>On this page a user can enter their contact infomation. There is a little validation for the inputs with error messaging if the required fields are missed.
         </h5>
         <h5>Once a user fills out the contact form correctly and clicks submit, a success message is received and the data from the form is entered into the MySQL database. An email is also generated notifying the business owner that a request for contact has been received. 
         </h5>              
         <h5>If the user registers and logs in, a button offering access to the page where the contact information from the database appears and the user acting as a logged in employee can view the information. NOTE: THIS ACCESS WOULD BE DIFFERENT ON A PRODUCTION SITE AND MUCH MORE SECURE. ACCESS IS OFFERRED ON THE NAVBAR IN THIS EXAMPLE SITE FOR DEMONSTRATION PURPOSES ONLY. PLEASE ENTER NON-SENSITIVE DATA ONLY IN THE CONTACT FORM TO TEST.
         </h5>
	

	{!! Form::open(['action' => 'ContactsController@store', 'method' => 'POST']) !!}
		<div class="form-group">
			{{Form::label('firstName', 'First Name')}}
			{{Form::text('firstName', '', ['class' => 'form-control', 'placeholder' => 'First Name Here'])}}
		</div>
		<div class="form-group">	
			{{Form::label('lastName', 'Last Name')}}
			{{Form::text('lastName', '', ['class' => 'form-control', 'placeholder' => 'Last Name Here'])}}
		</div>	
		<div class="form-group">	
			{{Form::label('email', 'Email')}}
			{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'ex: youremail@gmail.com'])}}
		</div>		
		<div class="form-group">
			{{Form::label('phone', 'Phone')}}
			{{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone Number'])}}
		</div>	
			<p>Check the boxes that match the type of coverage you are interested in.</p>
		<div class="form-group">
			{{Form::label('mortgageProtection', 'Mortgage Protection')}}
			{{Form::checkbox('mortgageProtection', '1')}}
			{{Form::label('healthcareCoverage', 'Healthcare Coverage')}}
			{{Form::checkbox('healthcareCoverage', '1')}}
			{{Form::label('finalExpense', 'Final Expense')}}
			{{Form::checkbox('finalExpense', '1')}}
		</div>
			<br>

			
		<div class="form-group">
			{{Form::label('message', 'Message')}}
			{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Message'])}}
		</div>	
		{{Form::submit('Submit', ['class'=>'btn btn-default'])}}
		{!! Form::close() !!}
			
		</div>

		
		
</div>



@endsection
