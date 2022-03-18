@extends('layouts.app')

@section('content')
	<div>
		@if(session('updateStatus'))
			@php
				$message = session('updateStatus')
			@endphp
			<x-elements.alerts.success :message="$message"></x-elements.alerts.success>
		@endif

		<h2 class="mb-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
			Compte : {{$account->name}}
		</h2>
		
		@php
			$message = "Tous les détails sur le compte"
		@endphp
		<x-elements.page-info :message="$message"></x-elements.page-info>
		
	</div>

	<div class="actions mb-8">
		<a class="btn-sm inline-flex items-center justify-center border mr-4 bg-indigo-500 hover:bg-indigo-600 text-white" href="{{route('account.edit', ['account' => $account])}}">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
				<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
			  </svg>
			Modifier
		</a>

		<button class="btn-sm inline-flex items-center justify-center border bg-red-600 hover:bg-red-700 text-white" @click="openModal">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
			</svg>
			<span class="block ml-2">Supprimer</span>
		</button>
	</div>

	<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
		<!-- Card -->
		<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
				</svg>
			</div>
			<div>
				<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
					Solde actuel
				</p>
				<p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
					{{$currency}} {{moneyFormat($account->balance)}}
				</p>
			</div>
		</div>
		<!-- Card -->
		<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
				  </svg>
			</div>
			<div>
				<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
					Total Revenus
				</p>
				<p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
					{{$currency}} 0
				</p>
			</div>
		</div>
		<!-- Card -->
		<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
				  </svg>
			</div>
			<div>
				<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
					Total Dépenses
				</p>
				<p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
					{{$currency}} 0
				</p>
			</div>
		</div>
		<!-- Card -->
		<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
				  </svg>
			</div>
			<div>
				<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
					Cash Flow
				</p>
				<p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
					Bool
				</p>
			</div>
		</div>
	</div>

	<section>
		<div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-slate-200">
			<header class="px-5 py-4 border-b border-slate-100">
				<h2 class="font-semibold text-slate-800">Vos revenus : </h2>
			</header>
			<div class="p-3">
				<div class="overflow-x-auto">
					<table class="table-auto w-full">
						<thead class="text-xs font-semibold uppercase text-slate-400 bg-slate-50">
							<tr>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-left">Label</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-left">Categorie</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-left">Montant</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-center">Date</div>
								</th>
							</tr>
						</thead>
						{{-- <tbody class="text-sm divide-y divide-slate-100">
							<tr>
								<td class="p-2 whitespace-nowrap">
									<div class="flex items-center">
										<div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
												src="/src/images/user-36-05.jpg" alt="Alex Shatov" width="40" height="40"></div>
										<div class="font-medium text-slate-800">Alex Shatov</div>
									</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left">alexshatov@gmail.com</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left font-medium text-green-500">$2,890.66</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-lg text-center">🇺🇸</div>
								</td>
							</tr>
							<tr>
								<td class="p-2 whitespace-nowrap">
									<div class="flex items-center">
										<div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
												src="/src/images/user-36-06.jpg" alt="Philip Harbach" width="40" height="40">
										</div>
										<div class="font-medium text-slate-800">Philip Harbach</div>
									</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left">philip.h@gmail.com</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left font-medium text-green-500">$2,767.04</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-lg text-center">🇩🇪</div>
								</td>
							</tr>
							<tr>
								<td class="p-2 whitespace-nowrap">
									<div class="flex items-center">
										<div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
												src="/src/images/user-36-07.jpg" alt="Mirko Fisuk" width="40" height="40"></div>
										<div class="font-medium text-slate-800">Mirko Fisuk</div>
									</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left">mirkofisuk@gmail.com</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left font-medium text-green-500">$2,996.00</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-lg text-center">🇫🇷</div>
								</td>
							</tr>
							<tr>
								<td class="p-2 whitespace-nowrap">
									<div class="flex items-center">
										<div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
												src="/src/images/user-36-08.jpg" alt="Olga Semklo" width="40" height="40"></div>
										<div class="font-medium text-slate-800">Olga Semklo</div>
									</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left">olga.s@cool.design</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left font-medium text-green-500">$1,220.66</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-lg text-center">🇮🇹</div>
								</td>
							</tr>
							<tr>
								<td class="p-2 whitespace-nowrap">
									<div class="flex items-center">
										<div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
												src="/src/images/user-36-09.jpg" alt="Burak Long" width="40" height="40"></div>
										<div class="font-medium text-slate-800">Burak Long</div>
									</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left">longburak@gmail.com</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left font-medium text-green-500">$1,890.66</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-lg text-center">🇬🇧</div>
								</td>
							</tr>
						</tbody> --}}
					</table>
				</div>
			</div>
		</div>

		<div class="col-span-full xl:col-span-6 my-8 bg-white shadow-lg rounded-sm border border-slate-200">
			<header class="px-5 py-4 border-b border-slate-100">
				<h2 class="font-semibold text-slate-800">Vos dépenses : </h2>
			</header>
			<div class="p-3">
				<div class="overflow-x-auto">
					<table class="table-auto w-full">
						<thead class="text-xs font-semibold uppercase text-slate-400 bg-slate-50">
							<tr>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-left">Label</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-left">Categorie</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-left">Montant</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-center">Date</div>
								</th>
							</tr>
						</thead>
						{{-- <tbody class="text-sm divide-y divide-slate-100">
							<tr>
								<td class="p-2 whitespace-nowrap">
									<div class="flex items-center">
										<div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
												src="/src/images/user-36-05.jpg" alt="Alex Shatov" width="40" height="40"></div>
										<div class="font-medium text-slate-800">Alex Shatov</div>
									</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left">alexshatov@gmail.com</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left font-medium text-green-500">$2,890.66</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-lg text-center">🇺🇸</div>
								</td>
							</tr>
							<tr>
								<td class="p-2 whitespace-nowrap">
									<div class="flex items-center">
										<div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
												src="/src/images/user-36-06.jpg" alt="Philip Harbach" width="40" height="40">
										</div>
										<div class="font-medium text-slate-800">Philip Harbach</div>
									</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left">philip.h@gmail.com</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left font-medium text-green-500">$2,767.04</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-lg text-center">🇩🇪</div>
								</td>
							</tr>
							<tr>
								<td class="p-2 whitespace-nowrap">
									<div class="flex items-center">
										<div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
												src="/src/images/user-36-07.jpg" alt="Mirko Fisuk" width="40" height="40"></div>
										<div class="font-medium text-slate-800">Mirko Fisuk</div>
									</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left">mirkofisuk@gmail.com</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left font-medium text-green-500">$2,996.00</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-lg text-center">🇫🇷</div>
								</td>
							</tr>
							<tr>
								<td class="p-2 whitespace-nowrap">
									<div class="flex items-center">
										<div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
												src="/src/images/user-36-08.jpg" alt="Olga Semklo" width="40" height="40"></div>
										<div class="font-medium text-slate-800">Olga Semklo</div>
									</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left">olga.s@cool.design</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left font-medium text-green-500">$1,220.66</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-lg text-center">🇮🇹</div>
								</td>
							</tr>
							<tr>
								<td class="p-2 whitespace-nowrap">
									<div class="flex items-center">
										<div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
												src="/src/images/user-36-09.jpg" alt="Burak Long" width="40" height="40"></div>
										<div class="font-medium text-slate-800">Burak Long</div>
									</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left">longburak@gmail.com</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-left font-medium text-green-500">$1,890.66</div>
								</td>
								<td class="p-2 whitespace-nowrap">
									<div class="text-lg text-center">🇬🇧</div>
								</td>
							</tr>
						</tbody> --}}
					</table>
				</div>
			</div>
		</div>
	</section>


	<section>
		<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
			Charts
		</h2>
		<div class="grid gap-6 mb-8 md:grid-cols-2">
			<div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
					Revenue
				</h4>
				<canvas id="pie" width="572" height="286" style="display: block; width: 572px; height: 286px;"
					class="chartjs-render-monitor"></canvas>
				<div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
					<!-- Chart legend -->
					<div class="flex items-center">
						<span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
						<span>Shirts</span>
					</div>
					<div class="flex items-center">
						<span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
						<span>Shoes</span>
					</div>
					<div class="flex items-center">
						<span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
						<span>Bags</span>
					</div>
				</div>
			</div>
			<div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
				<div class="chartjs-size-monitor">
					<div class="chartjs-size-monitor-expand">
						<div class=""></div>
					</div>
					<div class="chartjs-size-monitor-shrink">
						<div class=""></div>
					</div>
				</div>
				<h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
					Traffic
				</h4>
				<canvas id="line" style="display: block; width: 572px; height: 286px;" width="572" height="286"
					class="chartjs-render-monitor"></canvas>
				<div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
					<!-- Chart legend -->
					<div class="flex items-center">
						<span class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"></span>
						<span>Organic</span>
					</div>
					<div class="flex items-center">
						<span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
						<span>Paid</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<x-elements.delete-modal :account="$account"></x-elements.delete-modal>
@endsection