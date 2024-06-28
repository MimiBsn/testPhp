<?php

function btnClicked(): void
{
    $btnFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'click';
    $btnCount = 1;

    if(file_exists($btnFile)) {
        $btnCount = (int)file_get_contents($btnFile);
        $btnCount++;
    }
    file_put_contents($btnFile, $btnCount);
}

function nbrClick()
{
    $btnFile = 0;
    $btnFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'click';
    return file_get_contents($btnFile);
}
