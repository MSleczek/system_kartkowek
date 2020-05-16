<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<style>
			body { 
				background-color: rgb(245, 250, 253);
			}
			.container {
				margin-top: 50px;
				background-color: white;
				padding:25px;
				margin-bottom: 30px;
			}
		</style>
	</head>
	<body> 
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<a class="navbar-brand" href="menu.php">Testy z fizyki</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto"> 
					<li class="nav-item text-right">
						<a class="nav-link" href="add_question.php">Dodaj pytanie</a>
					</li>   
					<li class="nav-item text-right">
						<a class="nav-link" href="view_question.php">Edytuj/usuń pytanie</a>
					</li> 
					<li class="nav-item text-right">
						<a class="nav-link" href="">Dodaj kategorię</a>
					</li> 
					<li class="nav-item text-right">
						<a class="nav-link" href="">Edytuj kategorię</a>
					</li> 
				</ul>
			</div>  
		</nav>
