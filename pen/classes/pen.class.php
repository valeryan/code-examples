<?php

abstract class Pen {
	/**
	 * type of ink in pen
	 * @var string
	 */
	protected $inkColor;
	/**
	 * brand of pen.
	 * @var string
	 */
	protected $brand = 'genric';
	/**
	 * specific model of pen
	 * @var string
	 */
	protected $model = 'classic';

	/**
	 * function to define the color or the pen
	 * @author Samuel Hilson
	 * @param  string $ink ink color to be added to pen
	 */
	abstract public function loadInk($color);
	/**
	 * function to get the brand and model of pen
	 * @author Samuel Hilson
	 * @return string 
	 */
	public function brandish()
	{
		return $this->brand . ' ' . $this->model;
	}
	/**
	 * primary function of all pens
	 * @author Samuel Hilson
	 * @param  string $sbj what should be written
	 * @return boolean      if write was success or failure.
	 */
	public function write($sbj)
	{
		// check if pen has ink before writing.
		if ($this->inkColor != '')		
			echo '<span style="color:' . $this->inkColor . '">' . $sbj . '</span> ';
		return $this;		
	}
}