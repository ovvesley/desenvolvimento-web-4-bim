<?php

function renderCard($info = array(
	"titulo" => "5000 dias com ela",
	"ano" => "20xx",
	"image" => "images/movie-01.jpeg",
	'idUsuario' => '0',
	'idFilme' => '0'
))
{
	echo ("
  <div class='card m-5 p-4 matchCard'>
        <h6>$info[ano]</h6>
		<h5>$info[titulo]</h5>
		<div class='item'>
       	 <img class='card-img-top img-card' src='$info[image]' alt='Card image cap'>
		</div>
        <div class='card-body'>
        <hr>
		<div class='d-flex justify-content-center m-3'> 
		<form action='like.php' method='post'>
			<button class='btn btn-danger m-2 btn-lg'>
				<i class='fa fa-heart'>
					<input name='amou' value='1' type='hidden' />
					<input name='idUsuario' value='$info[idUsuario]' type='hidden' />
					<input name='idFilme' value='$info[idFilme]' type='hidden' />

				</i>
			 </button>
		</form>
		
		<form action='like.php' method='post'>
			<button class='btn btn-secondary m-2 btn-lg'>
				<i class='fa fa-thumbs-down'>
					<input name='amou' value='0' type='hidden' />
					<input name='idUsuario' value='$info[idUsuario]' type='hidden' />
					<input name='idFilme' value='$info[idFilme]' type='hidden' />
				</i>
			 </button>
		</form>
		
         </div>
    </div>
    ");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>meus filmes</title>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>

	<div class="container">
		<div class='content-card-principal'>
			<div class="d-flex justify-content-center">
				<div class="col-10 d-flex justify-content-center">
					<div class="cartao ">
						<?php
						renderCard();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="lib/jquery/jquery-3.4.1.min.js"></script>
	<script src="lib/popper/popper.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>