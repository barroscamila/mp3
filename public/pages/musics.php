<a href="?page=albums">Voltar para Álbuns</a>
<h1>Música do Àlbum <?=$_GET['album']?></h1>

<a href="?page=newMusic&album=<?=$_GET['album']?>" class="btn btn_sucess"> Cadastrar Nova Música</a>

<hr>

<?php

$album = $_GET['album'];
$musics = getMusics($album);
// var_dump($musics);

foreach($musics as $music):

?>

<div class="col-12">
    <audio src="<?php$music?>" controls></audio>
</div>

<?php
endforeach;
?>
