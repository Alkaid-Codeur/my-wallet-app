@extends('layouts.app')

@section('title')
	Mes comptes
@endsection

@section('content')
	@php
		$message = "Liste de mes comptes :"
	@endphp
	<x-elements.page-info :message="$message" ></x-elements.page-info>

	@if ($accounts->count() > 0)
		<section class="grid md:grid-cols-2 xl:grid-cols-3 gap-5">
			@foreach ($accounts as $account)
				<x-elements.account-overview :account="$account"></x-elements.account-overview>
			@endforeach
		</section>
	@endif
@endsection

