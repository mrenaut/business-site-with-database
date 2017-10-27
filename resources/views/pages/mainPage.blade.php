@extends('layouts.app')


@section('mainPage')


<div class="hero-image">
	<div class="hero-text">
		<h2>It's easy to relax when you know you're covered.
		</h2>
		<h4>Will my health insurance cover all my needs? Will my final expenses become a burden for my loved ones? Can I save my home if I get too sick to work?</h4>
		<h3>You don't have to worry about questions like these. Let us help you find peace of mind.</h3>
	</div>
</div>

<div class="container" id="iconContainer">
	<div class="row">
		<div class="col-md-4">
			<a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
			<a href="#" class="btn btn-default iconButton">Mortgage Protection</a>
		</div>
		<div class="col-md-4">
			<a href="#"><i class="fa fa-medkit" aria-hidden="true"></i></a>
			<a href="#" class="btn btn-default iconButton">Health Coverage</a>
		</div>
		<div class="col-md-4">
			<a href="#"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
			<a href="#" class="btn btn-default iconButton">Final Expense</a>
		</div>
	</div>
</div>


@endsection

