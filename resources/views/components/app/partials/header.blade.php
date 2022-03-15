@props(['user'])

<header class="flex items-center justify-between px-6 sm:px-12 py-4 bg-white border-b-4 border-indigo-600">
	<div class="flex items-center">
		<button class="text-gray-500 focus:outline-none lg:hidden">
			<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
			</svg>
		</button>
		
	</div>
	<div class="flex items-center">
		<div class="relative">
			<div class="sm:flex sm:items-center sm:ml-6">
				<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
					<div @click="open = ! open">
						<button class="flex relative items-center justify-center mx-4 w-8 h-8 bg-slate-100 hover:bg-slate-200 rounded-full text-gray-600 focus:outline-none">
							<svg class="w-5 h-4 fill-slate-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
							<div class="absolute top-0 right-0 w-2.5 h-2.5 bg-rose-500 border-2 border-white rounded-full"></div>
						</button>
					</div>
			
					<div x-show="open"
						x-transition:enter="transition ease-out duration-200"
						x-transition:enter-start="transform opacity-0 scale-95"
						x-transition:enter-end="transform opacity-100 scale-100"
						x-transition:leave="transition ease-in duration-75"
						x-transition:leave-start="transform opacity-100 scale-100"
						x-transition:leave-end="transform opacity-0 scale-95"
						class="absolute z-50 mt-2 w-fit rounded-md shadow-lg origin-top-right top-12 -right-24"
						style="display: none;"
						@click="open = false">
						<div class="px-4 py-4 flex flex-col items-center space-y-4 bg-white rounded-md whitespace-nowrap">
							<div class="text-xs font-semibold text-slate-400 uppercase pt-1.5 pb-2 px-4">Notifications</div>
							<div class="inline-flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md">
								<div class="flex items-center justify-center w-12 bg-green-500">
									<svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
									</svg>
								</div>
								<div class="px-4 py-2 -mx-3">
									<div class="mx-3">
										<span class="font-semibold text-green-500">Success</span>
										<p class="text-sm text-gray-600"> Vous êtes connecté! </p>
									</div>
								</div>
							</div>
							@if (Arr::has(request()->query(), 'verified'))
								<div class="inline-flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md">
									<div class="flex items-center justify-center w-12 bg-blue-500">
										<svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
										</svg>
									</div>
									<div class="px-4 py-2 -mx-3">
										<div class="mx-3">
											<span class="font-semibold text-blue-500">Info</span>
											<p class="text-sm text-gray-600"> Votre mail a bien été vérifié!. </p>
										</div>
									</div>
								</div>
							@endif
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="relative ml-8">
			<div class="sm:flex sm:items-center sm:ml-6">
				<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
					<div @click="open = ! open">
						<button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
							<div>{{$user->name}}</div>
							<div class="ml-1">
								<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
									<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
								</svg>
							</div>
						</button>
					</div>
			
					<div x-show="open"
						x-transition:enter="transition ease-out duration-200"
						x-transition:enter-start="transform opacity-0 scale-95"
						x-transition:enter-end="transform opacity-100 scale-100"
						x-transition:leave="transition ease-in duration-75"
						x-transition:leave-start="transform opacity-100 scale-100"
						x-transition:leave-end="transform opacity-0 scale-95"
						class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-0"
						style="display: none;"
						@click="open = false">
						<div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
							<div class="pt-0.5 pb-2 px-3 mb-1 border-b border-slate-200">
								<div class="font-medium text-slate-800">{{$user->name}}</div>
								<div class="text-xs text-slate-500 italic">{{$user->email}}</div>
							</div>
							<!-- Menu -->
							<ul>
								<li>
									<a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out hover:bg-gray-100" href="{{route('settings')}}">Parametres</a>
								</li>
								<!-- Deconnexion -->
								<li>
									<form method="POST" action="{{route('logout')}}">
										@csrf
										<button type="submit" class=" font-medium text-sm text-indigo-500 block text-left w-full py-1 px-3 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out hover:bg-gray-100">Déconnexion</button>
									</form>
									
								</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>