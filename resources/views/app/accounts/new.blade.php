@extends('layouts.app')

@section('content')

	@php
		$message = "Tous les détails sur le compte"
	@endphp
	<x-elements.page-info :message="$message"></x-elements.page-info>

	@if ($errors->any())
		<div class="font-medium text-red-600 mt-4">
			Whoops! Corrigez les erreurs suivantes :
		</div>
		@foreach ($errors->all() as $error)
			<x-elements.alerts.warning :message="$error"></x-elements.alerts.warning>
		@endforeach
	@endif

	<x-app.account-form :account="$account" :types="$types" :currencies="$currencies" action="create"></x-app.account-form>
@endsection
