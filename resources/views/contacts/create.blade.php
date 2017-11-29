

@extends('layouts.app')

@section('form')

	<div class="container" id="form">
		
		
		<h1>Get a Quote!</h1>
		<h5>Protec Insurance reviews the policies available across the major providers you trust to make sure you get the right fit for your situation and budget. </h5>
		<h5>qui blanditiis praesentium volupta-tum deleniti atque corrupti quos dolores et quas molestias excep-turi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eli-gendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repel-lendus. Temporibus autem qui-busdam et aut officiis debitis aut rerum</h5>
	

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
