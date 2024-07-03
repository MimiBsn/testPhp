<?php

class ClickCounter extends Counter
{
    public $fileName = 'clickCounter';

    public function incrCounter(string $dataFile): void
    {
        parent::incrCounter($dataFile);
        $nbrViews = 0;
    }

}
