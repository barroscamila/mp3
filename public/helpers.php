<?php

function getAlbums() 
{
    $albums = glob('albums/*'); //retorna um array
    return $albums;
}