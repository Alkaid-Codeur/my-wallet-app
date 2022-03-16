@props(['account'])

<div class="flex flex-col bg-white shadow-lg rounded-sm border border-slate-200">
	<div class="px-5 pt-5">
		<div class="flex justify-between items-center mb-2">														<div class="h-12 w-12 bg-slate-300 rounded-full flex justify-center items-center">
				{!! $account->type->icon !!}
			</div>
			
			<div class="relative inline-flex" x-data="{dropdownMenu: false}" @click.outside="dropdownMenu = false" >
				<button class="text-slate-400 hover:text-slate-500 rounded-full false" aria-haspopup="true" aria-expanded="false" @click="dropdownMenu = ! dropdownMenu" >
					<span class="sr-only">Menu</span>
					<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
					  </svg>
				</button>
				
				<div class="origin-top-right z-10 absolute top-full right-0 w-fit bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1 exit-done" x-show="dropdownMenu">
					<ul>
						<li class="text-slate-600 hover:bg-indigo-800 hover:text-white">
							<a class="font-medium text-sm whitespace-nowrap py-1 px-8"
								href="{{route('account.show', ['account' => $account])}}">Voir les détails
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<h2 class="text-lg font-semibold text-slate-800 mb-2">{{$account->name}}</h2>
		<div class="text-xs font-semibold text-slate-400 uppercase mb-1">{{$account->type->value}}</div>
		<div class="flex items-start">
			<div class="text-2xl font-bold text-slate-800 mr-2">{{$account->currency->symbol}} {{number_format($account->balance, 0 , '' , ' ')}}</div>
		</div>
	</div>
	<div class="grow">
		<canvas width="403" height="128" style="display: block; box-sizing: border-box; height: 128px; width: 403px" aria-label="Hello ARIA World" role="img"></canvas>
	</div>
</div>




