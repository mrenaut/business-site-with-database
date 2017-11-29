@extends('layouts.app')


@section('mainPage')


<div class="hero-image">
	<div class="hero-text">
		<h2>It's easy to relax when you know you're covered.
		</h2>
		<!--<h4>Will my health insurance cover all my needs? Will my final expenses become a burden for my loved ones? Can I save my home if I get too sick to work?</h4>
		<h3>You don't have to worry about questions like these. Let us help you find peace of mind.</h3>-->
         
         <h4>This site is a prototype of a business site for an insurance company. It's a PHP/Laravel application that requires authentication for an employee section, reads and writes to a MySQL database, and sends email.</h4>
         <h3>New user registration will not be left available in the navigation bar for the production site and dummy data has been used. This was done strictly for demonstration purposes so the user can fill out the contact form and/or register and view the contacts database where the contact information is added upon form submission.</h3>
	</div>
</div>

<div class="container" id="iconContainer">
	<div class="row">
		<div class="col-md-4">
              <a href="/mortgageProtection"><i class="fa fa-home" aria-hidden="true"></i></a>
              <a href="/mortgageProtection" class="btn btn-default iconButton">Mortgage Protection</a>
		</div>
		<div class="col-md-4">
              <a href="/healthCoverage"><i class="fa fa-medkit" aria-hidden="true"></i></a>
              <a href="/healthCoverage" class="btn btn-default iconButton">Health Coverage</a>
		</div>
		<div class="col-md-4">
              <a href="/finalExpense"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
              <a href="/finalExpense" class="btn btn-default iconButton">Final Expense</a>
		</div>
	</div>
</div>


@endsection

