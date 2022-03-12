@extends('layouts.main')

@section('title')
- Acceuil
@endsection

@section('content')
<div class="banner bg-gradient-to-r from-special-100 to-special-150 text-white py-40 px-6 text-center ">
	<div class="banner-content animate-wiggle md:text-left lg:w-2/3 xl:max-w-2xl xl:mx-auto">
		<h2 class="text-4xl font-bold mb-2">Qu'attendez vous ?</h2>
		<p class="text-2xl text-slate-200 leading-10">Il n'y a pas de bon moments pour controller ses finances. Soyez désormais collé à votre budget avec <span>My Wallet</span> </p>

		<button class="mt-8 text-lg bg-blue-500 py-3 px-5 rounded-md"><a href="{{route('register')}}">Commencer</a></button>
	</div>
</div>

<main>
	<section class="pt-12 px-8">
		<div class="lg:w-2/3 mx-auto xl:max-w-2xl">
			<h2 class="text-5xl my-5 text-special-200 leading-tight text-center">Simplifiez vous la vie.</h2>
			<p class="text-xl text-special-350 text-center leading-7">Wallet Manager est la vraie réponse pour ceux qui se posent qui se posent des questions sur leurs finances. Consultez vos opérations financières, plongez dans des rapports, établissez des budgets et profitez de catégorisations automatiques. 🤑</p>

			<button class="text-2xl px-8 py-4 bg-special-250 rounded-sm border-special-250 w-fit mx-auto block mt-8 text-special-300 shadow-2xl">Tutoriel</button>
		</div>
	</section>

	<section id="features" class="py-24 lg:max-w-6xl mx-auto">
		<div id="features-list" class="px-4 md:flex flex-wrap">
			<div class="md:px-4 basis-1/3 flex">
				<div class="shadow-spe-1 p-8 my-8 flex flex-col">
					<div class="flex items-center mb-5">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-special-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
						</svg>
						<h2 class="text-2xl pl-2">Comptes</h2>
					</div>
					<div class="flex-grow">
						<p class="text-base text-special-350">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium optio quas odio, cupiditate eligendi sit placeat, quaerat dolorem autem at amet maxime nulla iure et fugit facere modi deleniti quasi.</p>
					</div>
				</div>
			</div>
			<div class="md:px-4 basis-1/3 flex">
				<div class="shadow-spe-1 p-8 my-8 flex flex-col">
					<div class="flex items-center mb-5">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-special-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
							<path stroke-linecap="round" stroke-linejoin="round" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
						</svg>
						<h2 class="text-2xl pl-2">Catégories</h2>
					</div>
					<p class="text-base text-special-350 flex-grow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dignissimos quisquam culpa asperiores adipisci error. Soluta nesciunt quas corrupti culpa amet maxime, asperiores magnam id temporibus, quidem quaerat facere fugiat!</p>
				</div>
			</div>
			<div class="md:px-4 basis-1/3 flex">
				<div class="shadow-spe-1 p-8 my-8 flex flex-col">
					<div class="flex items-center mb-5">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-special-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
						  </svg>
						<h2 class="text-2xl pl-2">Statistiques</h2>
					</div>
					<p class="text-base text-special-350 flex-grow">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam consectetur id expedita repudiandae similique reiciendis esse nisi velit molestias at nemo, ex maxime. Rerum omnis ullam illum voluptate atque consectetur.</p>
				</div>
			</div>
			<div class="md:px-4 basis-1/3 flex">
				<div class="shadow-spe-1 p-8 my-8 flex flex-col">
					<div class="flex items-center mb-5">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-special-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
						  </svg>
						<h2 class="text-2xl pl-2">Budget</h2>
					</div>
					<p class="text-base text-special-350 flex-grow">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi facere error provident rerum nam amet vero ut placeat harum praesentium aliquid nulla fuga atque inventore molestiae et, in minima iste.</p>
				</div>
			</div>

			<div class="md:px-4 basis-1/3 flex">
				<div class="shadow-spe-1 p-8 my-8 flex flex-col">
					<div class="flex items-center mb-5">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-special-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
						  </svg>
						<h2 class="text-2xl pl-2">Dettes</h2>
					</div>
					<p class="text-base text-special-350 flex-grow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sed repudiandae perferendis odio dicta quibusdam magni suscipit explicabo eveniet commodi, necessitatibus, eligendi quidem vel fuga. Quia enim sit sed laborum?</p>
				</div>
			</div>
			
		</div>
	</section>

</main>
@endsection
