@extends('layouts.app') 




@section('contactData')
<div class="container-fluid" id="contact">
	<div class="row">
		<div class="col-md-12">

			<table class="table table-hover ">
				<thead>
					<tr>
						<th>#</th>
						<th>First</th>
						<th>Last</th>
						<th>Email</th>
						<th>Phone</th>
						<th>M</th>
						<th>H</th>
						<th>F</th>
						<th>Message</th>
						<th>Created</th>
					</tr>
				</thead>
				<tbody>
					
					@if(count($contacts) > 0)
					@foreach($contacts as $contact)
					
					<tr>
						<td>{{$contact->id}}</td>
						<td>{{$contact->firstName}}</td>
						<td>{{$contact->lastName}}</td>
						<td>{{$contact->email}}</td>
						<td>{{$contact->phone}}</td>
						<td>{{$contact->mortgageProtection}}</td>
						<td>{{$contact->healthcareCoverage}}</td>
						<td>{{$contact->finalExpense}}</td>
						<td>{{$contact->message}}</td>
						<td>{{$contact->created_at}}</td>
						
					</tr>
					
					@endforeach
					{{$contacts->links()}}
										
					@else
						<p>No contacts found.</p>
					@endif

					
				</tbody>
			</table> 
			
			<button>Export to Excel</button>
			
		</div>
		
	</div>	

	<div class="row">
		<div class="col-md-12">
			<!--need export button here-->

		</div>
	</div>




</div>
<!-- /.container-->





@endsection
