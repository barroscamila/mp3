<a href="?page=musics&album=<?=$_GET['album']?>">Voltar para o Álbum <?=$_GET['album']?></a>

<h1>Cadastrar Nova Música</h1>

<form action="#" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <input type="file" name="audio" class="form-control">
    </div>
    <button type="submit" class="btn btn-sucess">Cadastrar</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $album = $_GET['album'];

    $path = "albums/{$album}/musics/";

    if (!is_dir($path)) {
        mkdir($path);
    }

    if (move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])) {
        header("Location: ?page=musics&album={$album}");
    } else {
        echo 'Falha no upload...';
    }
}

?>