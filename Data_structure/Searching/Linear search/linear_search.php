<?php

// Linear search implementation in php 

function LinearSearch(array $arr, $item)
{
    foreach ($arr as $value) { //Traversing through the whole array to search for the 'item'
        if ($value === $item)
            return True; //if the item found return true. 
    }
    return False;
}

// Testing linear search implementation
$schoolThings = array('book', 'pen', 'rubber', 'sharpener', 'pencil', 'noteBook');

echo LinearSearch($schoolThings, 'pencil') ? 'True' : 'False';
echo PHP_EOL;
echo LinearSearch($schoolThings, 'teacher') ? 'True' : 'False';
echo PHP_EOL;
