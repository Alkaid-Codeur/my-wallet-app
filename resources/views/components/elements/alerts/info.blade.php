@props(['message'])

<div x-data="{open:true}">
	<div class="justify-between bg-indigo-100 rounded-lg py-5 px-6 mb-3 text-lg font-semibold text-indigo-700 inline-flex items-center w-full" role="alert" x-show="open">
		<div class="flex items-center">
			<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-circle-right"
				class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				<path fill="currentColor"
					d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z">
				</path>
			</svg>
		<span>{{$message}}</span>
		</div>
		<div class="">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" @click="open = !open">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
			</svg>
		</div>
	</div>
</div>