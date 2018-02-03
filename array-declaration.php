<?php 
/* --------------------- */
/*  Prahlad Makwana      */
/* --------------------- */

$array=[];
/*
$array=array();
*/
var_dump($array);  

$array[]='one';
$array[]='two';
$array[]='three';
/*
$array=array('one','two','three');
*/ 
var_dump($array);

/* push elements in array */ 
$stack = array("one", "two");
var_dump($stack);
array_push($stack, "three", "four");
var_dump($stack);

/* push element at begining of array */ 

array_unshift($stack,'zero');	
var_dump($stack);

/* push element at begining of array */ 

array_unshift($stack,'-two','-one');	
var_dump($stack);


/* remove element from array */
unset($stack[0]);	
var_dump($stack);

/* remove element by value from array */
$key = array_search('-one', $stack);
if($key !== false)
{
	unset($stack[$key]);	
}
var_dump($stack); 

/* remove first element from array */ 
array_shift($stack); 
var_dump($stack);

/* remove last element from array */ 
array_pop($stack); 
var_dump($stack); 

/* remove multiple element from array and replace with other element */
$stack=array("one", "two", "three", "four", "five");
array_splice($stack, 2); 
var_dump($stack); 
 
$stack=array("one", "two", "three", "four", "five");
array_splice($stack, 2,1); 
var_dump($stack);
/* end of file */
?>
