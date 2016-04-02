<?php
/**
 * cache a fact
 * @param  integer $fact fact
 * @param  string  $key  cache key
 * @return void
 */
function factCache($fact, $key)
{

}
/**
 * retrieve cache if available
 * @param  string $key cache key
 * @return integer
 */
function cacheCheck($key)
{

}
/**
 * test using recursion to build factorials
 * @param  integer $i starting number for factorial
 * @return string
 */
function factByRec($i)
{
    if ($i < 0) {
        return false;
    }
    if ($i < 2) {
        return 1;
    }
    return $i * factByRec($i - 1);
}

/**
 * test using loops to build factorials
 * @param  integer $n starting number for factorial
 * @return string
 */
function factByLoop($n)
{
    if ($n < 0) {
        return false;
    }
    $x = 1;
    for ($i=1; $i <= $n; $i++) {
        $x = $x * $i;
    }
    return $x;
}

var_dump(factByRec(4));
var_dump(factByRec(3));
var_dump(factByRec(2));
var_dump(factByRec(0));
var_dump(factByRec(-1));
var_dump(factByRec(98));

var_dump(factByLoop(4));
var_dump(factByLoop(3));
var_dump(factByLoop(2));
var_dump(factByLoop(0));
var_dump(factByLoop(-1));
var_dump(factByLoop(171));
