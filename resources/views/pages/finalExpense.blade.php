@extends('layouts.app')


@section('finalExpense')

<div class="container" id="finalExpense">
	<div class="row">
		<div class="col-md-6">
			<h3>Final Expense</h3>
			<p>qui blanditiis praesentium volupta-tum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provi-dent, similique sunt in culpa qui of-ficia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedi-ta distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possi-mus, omnis voluptas assumenda est, omnis dolor repellendus. Tem-poribus autem quibusdam et aut of-ficiis debitis aut rerum</p>
		</div>
		<div class="col-md-6">
			<img src="{{URL::asset('images/finalExpense.jpg')}}" id="finalExpensePic"> 

		</div>
	</div>

</div>


@endsection
