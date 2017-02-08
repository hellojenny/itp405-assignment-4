<!DOCTYPE html>
<html>
	<head>
		<title>Tweets</title>
		<link href="https://fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
		<style>
		body {
			font-family: 'Mallanna';
		}

		.container {
			width: 700px;
			padding: 20px;
			margin: auto;
		}

		.tweet {
			display: block;
			position: relative;
			width: 98%;
			padding: 16px;
			border: 1px solid #ddd;
			background: #fdfdfd;
			margin: 20px 0;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Jenny's Twitter Clone</h1>
			<div class="tweet">
				{{$tweet->tweet}}
			</div>
			<a href="/">Go back</a>
		</div>
	</body>
</html>
