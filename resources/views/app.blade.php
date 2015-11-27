<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPOnline</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ URL::asset('bootstrap/css/material.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('bootstrap/css/material-fullpalette.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('bootstrap/css/ripples.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('bootstrap/css/roboto.css') }}" rel="stylesheet">
	{{--<link href="{{ URL::asset('bootstrap/css/app.css') }}" rel="stylesheet">--}}


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}

    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('bootstrap/js/material.js') }}"></script>
    <script src="{{ URL::asset('bootstrap/js/ripples.js') }}"></script>


</head>
<body>

	<nav class="navbar navbar-material-blue-grey">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Vente Partner Online</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/accueil') }}">Accueil</a></li>
					<li><a href="{{ url('/produit') }}">Produit</a></li>
					<li><a href="{{ url('/documentation') }}">Documentations</a></li>
					<li><a href="{{ url('/tarifs') }}">Tarifs</a></li>
					<li><a href="{{ url('/contact') }}">Contact</a></li>
					<li><a href="{{ url('/builder') }}">Builder VPO</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if(auth()->guest())
						@if(!Request::is('auth/login'))
							<li><a href="{{ url('/auth/login') }}">Se Connecter</a></li>
						@endif
						@if(!Request::is('auth/register'))
							<li><a href="{{ url('/auth/register') }}">S'enregistrer</a></li>
						@endif
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Deconnexion</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
    <div class="container-fluid" style="padding-top: 80px">
        @yield('content')
    </div>
</body>
</html>
