<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
</head>
<body>
	<div>
		<canvas id="myChart"></canvas>
	</div>

	<script src="{{asset('assets/js/app.js')}}" async></script>

	<script>
		const labels = [
		  'January',
		  'February',
		  'March',
		  'April',
		  'May',
		  'June',
		];
	  
		const data = {
		  labels: labels,
		  datasets: [{
			label: 'My First dataset',
			backgroundColor: 'rgb(255, 99, 132)',
			borderColor: 'rgb(255, 99, 132)',
			data: [0, 10, 5, 2, 20, 30, 45],
		  }]
		};
	  
		const config = {
		  type: 'line',
		  data: data,
		  options: {}
		};
	  </script>

	<script>
		const myChart = new Chart(
		document.getElementById('myChart'),
		config
		);
	</script>
  
	  
</body>
</html>