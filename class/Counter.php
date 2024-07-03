<?php

class Counter
{
    protected $fileName = 'viewsCounter';
    protected $nbrViews = 0;
    protected $incrementCounter = true;


    public function __construct(bool $incrementCounter = true)
    {
        if(!$incrementCounter) {
            $this->incrementCounter = $incrementCounter;
        }
        $dataFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $this->fileName . '.txt';
        $this->setCounter($dataFile);

    }

    private function setCounter(string $dataFile): void
    {
        if(file_exists($dataFile)) {
            $this->nbrViews = (int)file_get_contents($dataFile);
        }
        if($this->incrementCounter) {
            $this->nbrViews += 1;
            file_put_contents($dataFile, $this->nbrViews);
        }

    }

    public function getViews(): string
    {
        return $this->nbrViews;
    }

}
