<?php

declare(strict_types=1);

//Function(s) that sorts posts by date from newest to oldest.

//Define function with the parameters $a and $b.
function sortByDate ($a, $b) {

//return our arrays time stamps through phps internal function usort and string to time.
  return strtotime ($a['time']) < strtotime ($b ['time']);
}

//Call internal "usort" function in php and send in our array of posts AND our own function sortByDate as arguments to usort.

usort($contentArrays, 'sortByDate');
