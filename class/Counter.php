<?php

class Counter
{
    public $fileName = 'viewsCounter';

    public function addViews(): void
    {
        $dataFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $this->fileName;
        $this->incrCounter($dataFile);
    }

    public function incrCounter(string $dataFile): void
    {
        $nbrViews = 1;
        if(file_exists($dataFile)) {
            $nbrViews = (int)file_get_contents($dataFile);
            $nbrViews++;
        }
        file_put_contents($dataFile, $nbrViews);
    }

    public function showViews(): string
    {
        $dataFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $this->fileName;
        if(file_exists($dataFile)) {
            return file_get_contents($dataFile);
        }
        throw new Error('This file doesn\'t exists.');
    }

}
