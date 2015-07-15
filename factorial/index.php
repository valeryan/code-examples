<?php
/**
 * cache a fact
 * @param  integer $fact fact
 * @param  string  $key  cache key
 * @return void
 */
function fact_cache($fact, $key)
{

}
/**
 * retrieve cache if available
 * @param  string $key cache key
 * @return integer
 */
function cache_check($key)
{

}
/**
 * test using recursion to build factorials
 * @param  integer $i starting number for factorial
 * @return string
 */
function fact_by_rec($i)
{
    if ($i < 0) {
        return false;
    }
    if ($i < 2) {
        return 1;
    }
    return $i * factorial($i - 1);
}

/**
 * test using loops to build factorials
 * @param  integer $n starting number for factorial
 * @return string
 */
function fact_by_loop($n)
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
