@extends('layouts.app')


@section('navbar')

<div id="navbarContainer">
	<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197">

		<div class="container-fluid">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" rel="home" href="#">
						<img style="max-width:40px; margin-top: -7px;" src="/assets/images/logo.png">
					</a>
					<a class="navbar-brand" href="/">PROTEC INSURANCE</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Services <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/mortgageProtection">Mortgage Protection</a></li>
								<li><a href="/healthcareCoverage">Healthcare Coverage</a></li>
								<li><a href="/finalExpense">Final Expense</a></li>
								<li class="divider"></li>
								<li><a href="/contact">Contact</a></li>

							</ul>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</nav>
</div>
@endsection