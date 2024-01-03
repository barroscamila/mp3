<?php

function getAlbums() 
{
    $albums = glob('albums/*'); //retorna um array com tudo que tem dentro do diretorio albums
    return $albums;
}

function getMusics($album)
{
    $musics = glob("albums/{$album}/musics/*.mp3");
    return $musics;
}