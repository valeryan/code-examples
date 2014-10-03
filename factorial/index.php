<?php
function fact_cache($fact, $key)
{
	
}
function cache_check($key)
{
	
}
// test factorials by recursion
function fact_by_rec($i)
{	
	if ($i < 0) return false;
	if ($i < 2) return 1;
	return $i * factorial($i - 1);
}

// test factorials by for loop
function fact_by_loop($n)
{
	if ($n < 0) return false;
	$x = 1;
	for ($i=1; $i <= $n; $i++) { 
		$x = $x * $i; 
	}
	return $x;
}

var_dump(fact_by_rec(4));
var_dump(fact_by_rec(3));
var_dump(fact_by_rec(2));
var_dump(fact_by_rec(0));
var_dump(fact_by_rec(-1));
var_dump(fact_by_rec(98));

var_dump(fact_by_loop(4));
var_dump(fact_by_loop(3));
var_dump(fact_by_loop(2));
var_dump(fact_by_loop(0));
var_dump(fact_by_loop(-1));
var_dump(fact_by_loop(171));
