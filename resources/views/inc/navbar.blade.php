<!--old navbar, not being used currently-->

<div id="navbarContainer">
	<nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="197">

		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				<a class="navbar-brand" rel="home" href="#">
						
						
						<a class="navbar-brand" href="/"><img style="max-width:40px; margin:auto;0;" src="{{URL::asset('images/logo.png')}}"></a>
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
							<li><a href="/contacts/create">Contact</a></li>

						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<!-- Authentication Links -->
					@guest
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Register</a></li>
					@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault();
											  document.getElementById('logout-form').submit();">
										Logout
									</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
					@endguest
				</ul>

			</div>
		</div>

	</nav>
	
</div>
