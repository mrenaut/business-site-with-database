

@extends('layouts.app')

@section('form')

	<div class="container" id="form">
	

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
			<p>Check the boxes for what type of coverage you are interested in.</p>
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
			
			
		</div>

		{{Form::submit('Submit', ['class'=>'btn btn-default'])}}
	{!! Form::close() !!}
		
</div>



@endsection
