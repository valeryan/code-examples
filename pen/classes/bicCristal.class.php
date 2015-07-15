<?php

class bicCristal extends pen
{
    /**
     * manufacturer or pen
     * @var string
     */
    protected $brand = 'Bic';
    /**
     * specific model of pen
     * @var string
     */
    protected $model = 'Cristal';
    /**
     * Cristal pens have a cap. caps are on by default.
     * @var boolean
     */
    public $capped = true;
    /**
     * when Cristal pen is created the ink is added
     * @author Samuel Hilson
     * @param  string $color color of ink added to pen
     */
    public function __construct($color = 'black')
    {
        $this->loadInk($color);
    }
    /**
     * set capped to false
     * @author Samuel Hilson
     * @return class instance
     */
    public function uncap()
    {
        $this->capped = false;
        return $this;
    }
    /**
     * set capped to true
     * @author Samuel Hilson
     * @return class instance
     */
    public function cap()
    {
        $this->capped = true;
        return $this;
    }
    /**
     * function to define the color or the pen
     * @author Samuel Hilson
     * @param  string $color ink color to be added to pen
     * @return  class instance
     */
    public function loadInk($color)
    {
        $this->inkColor = $color;
        return $this;
    }
    /**
     * write with pen if uncapped and ink is loaded
     * @author Samuel Hilson
     * @param  [type] $sbj [description]
     * @return [type]      [description]
     */
    public function write($sbj)
    {
        // we can't write with the cap on people.
        if (! $this->capped) {
            Parent::write($sbj);
        }
        return $this;
        // we could do something fancy here like check if writing was successful.
        // Another fun idea might be to set an ink level and have each write deplete ink.
        // Adding a new color would reset to the ink level back to 100%.
    }
}
