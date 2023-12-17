<h1>Álbum</h1>

<div class="row">
    <?php
        for ($i = 1; $i <= 10; $i++):
    ?>
    <div class="col-3 album">
        <a href="#">
            <img src="albums/default.jpg" alt="<?=$i?>" class="img-album"> 
            <!-- o mesmo que 'echo $i';--> 
            <h4>Album <?=$i?></h4>
        </a>
    </div>
    <?php
        endfor;
    ?>
</div>