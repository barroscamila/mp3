<h1>Álbum</h1>

<div class="row">
    <?php
        for ($i = 1; $i <= 10; $i++):
    ?>
    <div class="col-3">
        Album <?=$i;?> <!-- o mesmo que 'echo $i';--> 
    </div>
    <?php
        endfor;
    ?>
    
</div>