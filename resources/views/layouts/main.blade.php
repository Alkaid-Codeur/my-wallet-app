<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
	<title>{{env('APP_NAME')}} @yield('title')</title>
</head>
<body>
	<div id="ds-nav" class="absolute inset-y-0 right-0 bg-black w-64 text-slate-400 px-10 py-12 hidden z-10">
		<ul class="text-xl">
			<li class="p-1"><a href="#" class="hover:underline">Acceuil</a></li>
			<li class="p-1"><a href="#" class="hover:underline">Aide</a></li>
			<li class="p-1"><a href="#" class="hover:underline">Se connecter</a></li>
			<li class="p-1"><a href="#" class="hover:underline">S'inscrire</a></li>
		</ul>
	</div>
	<header class="relative py-2.5 px-4 flex justify-between items-center xl:max-w-6xl xl:mx-auto">
		<div class="logo">
			<img src="{{asset('assets/images/logo.png')}}" alt="" class="w-12 h-12 object-cover">
		</div>
		<nav class="hidden lg:block">
			<ul class="flex justify-between text-lg">
				<li class="px-5"><a href="" @class([
					'hover:underline', 'hover:text-blue-500', 'hover:transition-colors', 'duration-700',
					'active-link' => Str::contains($_SERVER['REQUEST_URI'], 'help')
				])>Aide</a></li>
				<li class="px-5"><a href="{{route('register')}}" @class([
					'hover:underline', 'hover:text-blue-500', 'hover:transition-colors', 'duration-700',
					'active-link' => Str::contains($_SERVER['REQUEST_URI'], 'register')
				])>Inscription</a></li>
				<li class="px-5"><a href="{{route('login')}}" @class([
					'hover:underline', 'hover:text-blue-500', 'hover:transition-colors', 'duration-700',
					'active-link' => Str::contains($_SERVER['REQUEST_URI'], 'login')
				])>Connexion</a></li>
			</ul>
		</nav>
		<svg id="tg-button" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 z-20 lg:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
		</svg>
	</header>

	@yield('content')


	<footer class="bg-special-400 px-6 py-4 text-base text-special-450 text-center leading-7">
		<p>&copy; 2022 My Wallet. All rights reserved</p>
		<p>Made by <a href="https://github.com/Alkaid-Codeur" class="text-special-500 hover:underline">Alkaid-Codeur</a></p>
	</footer>

	<script src="{{asset('assets/js/scripts.js')}}" async></script>

	@yield('scripts')
</body>
</html>