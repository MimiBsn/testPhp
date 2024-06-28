<?php

function addVues(): void
{
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    $dailyFiles = $file . '-' . date('Y-m-d');
    incrCompteur($file);
    incrCompteur($dailyFiles);
}

function incrCompteur(string $file): void
{
    $compteur = 1;

    if(file_exists($file)) {
        $compteur = (int)file_get_contents($file);
        $compteur++;
    }

    file_put_contents($file, $compteur);
}

function nbrVues()
{
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($file);
}
