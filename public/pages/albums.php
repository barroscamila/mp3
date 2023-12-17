<h1>Álbum</h1>

<div class="row">
    <?php
        $albums = getAlbums();

        // for ($i = 1; $i <= 10; $i++):
        foreach ($albums as $album): 
            $infoAlbum = explode('/', $album);
            $nameAlbum = $infoAlbum[1];
            $imgAlbum = "{$album}/{$nameAlbum}.jpg";
    ?>
    <div class="col-3 album">
        <a href="#">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album"> 
            <h5><?=$nameAlbum?></h5>
            <!-- o mesmo que 'echo $nameAlbum';--> 
        </a>
    </div>
    <?php
        // endfor;
        endforeach;
    ?>
</div>