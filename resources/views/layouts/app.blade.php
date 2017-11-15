<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Protec Insurance</title>

		<!-- Fonts -->
		<!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!--<link href="assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">-->
		<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css" rel="stylesheet" integrity="sha384-C0X5qw1DlkeV0RDunhmi4cUBUkPDTvUqzElcNWm1NI2T4k8tKMZ+wRPQOhZfSJ9N" crossorigin="anonymous">

		<!--<link rel="stylesheet" href="https://frozen-inlet-23793.herokuapp.com/css/style.css" type="text/css">-->

		<link rel="stylesheet" href="https://frozen-inlet-23793.herokuapp.com/css/style.css" type="text/css">
	</head>
	<body>






		@include('inc.navbar')
		
		
		

		@yield('mainPage')
		@yield('healthcareCoverage')
		@yield('mortgageProtection')
		@yield('finalExpense')
		<br>
		<br>
		<br>
		
		@include('inc.messages')
		@yield('contact')
		@yield('employeeLogin')
		@yield('contactData')
		@yield('form')
		@yield('content')



		</div>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</html>