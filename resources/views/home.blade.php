<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="ds-nav" class="absolute inset-y-0 right-0 bg-black w-4/5 text-slate-400 px-10 py-12 hidden z-10">
		<ul class="text-xl">
			<li class="p-1"><a href="#" class="hover:underline">Acceuil</a></li>
			<li class="p-1"><a href="#" class="hover:underline">A propos</a></li>
			<li class="p-1"><a href="#" class="hover:underline">Aide</a></li>
			<li class="p-1"><a href="#" class="hover:underline">FAQ</a></li>
			<li class="p-1"><a href="#" class="hover:underline">Se connecter</a></li>
			<li class="p-1"><a href="#" class="hover:underline">S'inscrire</a></li>
		</ul>
	</div>
	<header class="relative py-2.5 px-4 flex justify-between items-center">
		<div class="logo">
			<img src="{{asset('assets/images/logo.png')}}" alt="">
		</div>
		<nav class="hidden lg:block ">
			<ul class="flex justify-between text-lg">
				<li class="px-5"><a href="" class="hover:underline hover:text-blue-500 hover:transition-colors duration-700">A propos</a></li>
				<li class="px-5"><a href="" class="hover:underline hover:text-blue-500 hover:transition-colors duration-700">Aide</a></li>
				<li class="px-5"><a href="" class="hover:underline hover:text-blue-500 hover:transition-colors duration-700">FAQ</a></li>
				<li class="px-5"><a href="" class="hover:underline hover:text-blue-500 hover:transition-colors duration-700">Se connecter</a></li>
			</ul>
		</nav>
		{{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
		  </svg> --}}
		<svg id="tg-button" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 z-20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
		</svg>
	</header>
	<div class="banner bg-gradient-to-r from-special-100 to-special-150 text-white py-40 px-6 text-center ">
		<div class="banner-content animate-wiggle">
			<h2 class="text-4xl font-bold mb-2">Qu'attendez vous ?</h2>
			<p class="text-2xl text-slate-200 leading-10">Il n'y a pas de bon moments pour controller ses finances. Soyez désormais collé à votre budget avec <span>My Wallet</span> </p>

			<button class="mt-8 text-lg bg-blue-500 py-3 px-5 rounded-md">Commencer</button>
		</div>
	</div>

	<main>
		<section class="pt-12 px-8">
			<div>
				<h2 class="text-5xl my-5 text-special-200 leading-tight text-center">Simplifiez vous la vie.</h2>
				<p class="text-xl text-gray-500 text-center leading-7">Wallet Manager est la vraie réponse pour ceux qui se posent qui se posent des questions sur leurs finances. Consultez vos opérations financières, plongez dans des rapports, établissez des budgets et profitez de catégorisations automatiques. 🤑</p>

				<button class="text-2xl px-8 py-4 bg-special-250 rounded-sm border-special-250 w-fit mx-auto block mt-8 text-special-300 shadow-2xl">Tutoriel</button>
			</div>
		</section>

		<section id="features" class="pt-24">
			<div id="features-list" class="px-4">
				<div class="shadow-spe-1 p-8 my-8">
					<h2 class="text-2xl mb-5">Comptes</h2>
					<p class="text-base text-special-350">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium optio quas odio, cupiditate eligendi sit placeat, quaerat dolorem autem at amet maxime nulla iure et fugit facere modi deleniti quasi.</p>
				</div>
				<div class="shadow-spe-1 p-8 my-8">
					<h2 class="text-2xl mb-5">Catégories</h2>
					<p class="text-base text-special-350">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium optio quas odio, cupiditate eligendi sit placeat, quaerat dolorem autem at amet maxime nulla iure et fugit facere modi deleniti quasi.</p>
				</div>
			</div>
		</section>
	</main>

	<div class="mt-10"></div>
	<script src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>