<?php

class bic4Colours extends pen {
	/**
	 * manufacturer or pen
	 * @var string
	 */
	protected $brand = 'Bic';
	/**
	 * specific model of pen
	 * @var string
	 */
	protected $model = '4 Colours';
	/**
	 * array of ink choices
	 * @var array
	 */
	private $inkChoices = array();
	/**
	 * button that has been clicked
	 * @var null|integer
	 */
	private $button = null;
	/**
	 * when Cristal pen is created the ink is added
	 * @author Samuel Hilson
	 * @param  string $color color of ink added to pen
	 */
	public function __construct()
	{
		// 4 Colour pens have a default color set to each of 4 buttons
		$this->inkChoices = array('black', 'purple', 'red', 'green');
	}
	/**
	 * although you can set a color directly this pen has a set color pool 
	 * controlled by the button clicked. 
	 * @author Samuel Hilson
	 * @param  string $color 
	 * @return  class instance
	 */
	public function loadInk($color)
	{
		$this->inkColor = $color;
		return $this;
	}
	/**
	 * handle setting color for specific button clicked
	 * @author Samuel Hilson
	 * @param  integer $button 1-4 
	 * @return class instance 
	 */
	public function click($button)
	{
		if ($button > 4 || $button <= 0) 
		{
			$this->resetButtons();
			return $this;
		}
		// store index of button clicked
		$this->button = $button;
		// buttons are 1-4 for humans fix index for array by subtracting 1. silly humans!
		$color = $this->inkChoices[$button - 1];
		$this->loadInk($color);
		return $this;
	}
	/**
	 * release all buttons and reset pen to no color selected
	 * @author Samuel Hilson
	 * @return class instance 
	 */
	public function resetButtons()
	{
		$this->button = null;
		$this->inkColor = false;
		return $this;
	}
	/**
	 * write with pen. chainable for multple writes.
	 * @author Samuel Hilson
	 * @param  string $sbj text to be written by pen
	 * @return class instance
	 */
	public function write($sbj)
	{
		// check if button is set. 
		if (is_integer($this->button))
			Parent::write($sbj);
		return $this;
	}
}