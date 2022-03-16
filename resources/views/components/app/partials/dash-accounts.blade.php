@props(['user', 'totalByCurrency'])

<section>
	<div class="flex items-center justify-center p-4 mb-8 text-base font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple text-center" href="https://github.com/estevanmaito/windmill-dashboard">
		<div class="flex items-center">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 float-left" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			  </svg>
		  <span class="block">Solde actuel : Vue d'ensemble</span>
		</div>
	</div>
	
	<div class="mt-4 -mx-5 sd:mx-0">
		<div class="">
			<h2 class="text-gray-600 text-xl font-bold text-center">Liste des comptes :</h2>
			<div class="mt-6">
				<div class="my-6 overflow-hidden bg-white rounded-md shadow">
					<table class="w-full text-left border-collapse">
						<thead class="border-b">
							<tr>
								<th class="px-5 py-3 text-sm font-medium text-gray-100 uppercase bg-indigo-800"> Compte </th>
								<th class="px-5 py-3 text-sm font-medium text-gray-100 uppercase bg-indigo-800"> Solde
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($user->accounts as $account)
								<tr class="hover:bg-gray-200 cursor-pointer">
									<td class="px-6 py-4 text-lg text-gray-700 border-b font-semibold">{{$account->name}}</td>
									<td class="px-6 py-4 text-gray-500 border-b text-xl"><span class="text-lg">{{$account->currency->symbol}}</span> {{number_format($account->balance, 0 , '' , ' ')}}</td>
								</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div class="mt-14 -mx-5 sd:mx-0">
		<div class="">
			<h2 class="text-gray-600 text-xl font-bold text-center">Solde par dévise :</h2>
			<div class="mt-6">
				<div class="my-6 overflow-hidden bg-white rounded-md shadow">
					<table class="w-full text-left border-collapse">
						<thead class="border-b">
							<tr>
								<th class="px-5 py-3 text-sm font-medium text-gray-100 uppercase bg-indigo-800"> Dévise </th>
								<th class="px-5 py-3 text-sm font-medium text-gray-100 uppercase bg-indigo-800"> Solde
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($totalByCurrency as $total)
								<tr class="hover:bg-gray-200 cursor-pointer">
									<td class="px-6 py-4 text-lg text-gray-700 border-b font-semibold">{{$total->name}}</td>
									<td class="px-6 py-4 text-gray-500 border-b text-xl"><span class="text-lg">{{$total->symbol}}</span> {{number_format($total->total, 0 , '' , ' ')}}</td>
								</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>