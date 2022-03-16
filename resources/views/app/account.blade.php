@extends('layouts.app')

@section('content')
	<div>
		<h2 class="mb-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
			Compte : {{$account->name}}
		</h2>
		@php
			$message = "Tous les détails sur le compte"
		@endphp
		<x-elements.page-info :message="$message"></x-elements.page-info>
	</div>

	<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
		<!-- Card -->
		<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
				<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
					<path
						d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
					</path>
				</svg>
			</div>
			<div>
				<p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
					Solde
				</p>
				<p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
					{{$currency}} {{moneyFormat($account->balance)}}
				</p>
			</div>
		</div>
		<!-- Card -->
		<div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
			<div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
				<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
					<path fill-rule="evenodd"
						d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
						clip-rule="evenodd"></path>
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
			<div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
				<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
					<path
						d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
					</path>
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
				<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
					<path fill-rule="evenodd"
						d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
						clip-rule="evenodd"></path>
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
@endsection