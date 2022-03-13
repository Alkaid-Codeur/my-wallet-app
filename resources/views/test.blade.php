<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
	<title>Document</title>
</head>
<body>
	<div class="flex flex-col min-h-screen overflow-hidden">
		<x-main.sections.header></x-main.sections.header>
	
		<main class="flex-grow">
			<x-main.sections.banner></x-main.sections.banner>
			<x-main.sections.features></x-main.sections.features>
			<x-main.sections.testimonials></x-main.sections.testimonials>
			<x-main.sections.footer></x-main.sections.footer>
		</main>
	</div>
</body>
</html>