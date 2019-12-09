<?php

function renderCard($info = array(
	"titulo" => "Loading...",
	"ano" => "Loading...",
	"image" => "images/loading.gif",
	'idUsuario' => '0',
	'idFilme' => '0'
))
{
	echo ("
  <div class='card m-5 p-4 matchCard anim '>
        <h6 id='ano'>$info[ano]</h6>
		<h5 id='titulo'>$info[titulo]</h5>
		<div class='item'>
       	 <img class='card-img-top img-card' id='image-poster' src='$info[image]' alt='Card image cap'>
		</div>
        <div class='card-body'>
        <hr>
		<div class='d-flex justify-content-center m-3'> 
		<form action='like.php' method='post'>
			<button class='btn btn-danger m-2 btn-lg'>
				<i class='fa fa-heart'>
					<input name='amou' value='1' type='hidden' />
					<input name='idUsuario' value='$info[idUsuario]' type='hidden' />
					<input class='idFilme' name='idFilme' value='$info[idFilme]' type='hidden' />

				</i>
			 </button>
		</form>
		
		<form action='like.php' method='post'>
			<button class='btn btn-secondary m-2 btn-lg'>
				<i class='fa fa-thumbs-down'>
					<input name='amou' value='0' type='hidden' />
					<input name='idUsuario' value='$info[idUsuario]' type='hidden' />
					<input class='idFilme' name='idFilme' value='$info[idFilme]' type='hidden' />
				</i>
			 </button>
		</form>
		
         </div>
    </div>
    ");
}


?>