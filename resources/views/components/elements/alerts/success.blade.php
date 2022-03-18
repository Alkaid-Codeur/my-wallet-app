@props(['message'])

<div x-data="{open:true}">
	<div class="justify-between bg-green-100 rounded-lg py-5 px-6 mb-3 text-lg font-semibold text-green-700 inline-flex items-center w-full" role="alert" x-show="open">
		<div class="flex items-center">
			<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
			class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
			<path fill="currentColor"
			d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
			</path>
		</svg>
		<span>{!! $message !!}</span>
		</div>
		<div class="">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" @click="open = !open">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
			</svg>
		</div>
	</div>
</div>