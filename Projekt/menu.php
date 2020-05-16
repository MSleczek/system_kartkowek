<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Formularz zgłoszeniowy</title>
		<?php include("head.php"); ?>
		<div class="bg text-center">
			<p>Menu</p>
		</div>
		<div class="container">
			<h1 class="text-muted text-center mt-3 mb-3">Wybierz, co chcesz sprawdzić</h1>
			<br/>
			<div class="card-deck align-item-center justify-content-center">
				<a href="add_question.php">
				<div class="card" style="width:380px; height:200px;">
					<div class="card-body">
						<img src="img/exam.png" class="img-fluid mx-auto d-block">
						<h2 class="card-title text-center">Dodaj pytanie</h2>
					</div>
				</div>
				</a>
				<a href="view_question.php">
				<div class="card" style="width:380px; height:200px;">
					<div class="card-body">
						<img src="img/exam.png" class="img-fluid mx-auto d-block">
						<h2 class="card-title text-center">Edytuj/usuń pytanie</h2>
					</div>
				</div>
				</a>
			</div>
			<br/>
			<div class="card-deck align-item-center justify-content-center">
				<a href="">
				<div class="card" style="width:380px; height:200px;">
					<div class="card-body">
						<img src="img/exam.png" class="img-fluid mx-auto d-block">
						<h2 class="card-title text-center">Dodaj kategorię</h2>
					</div>
				</div>
				</a>
				<a href="">
				<div class="card" style="width:380px; height:200px;">
					<div class="card-body">
						<img src="img/exam.png" class="img-fluid mx-auto d-block">
						<h2 class="card-title text-center">Edytuj kategorię</h2>
					</div>
				</div>
				</a>
			</div>
		</div>
		<?php include("footer.php"); ?>