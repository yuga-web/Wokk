<?php
// What to look for
$search = 'best';
// Read from file
$lines = file('file.txt');
foreach($lines as $lin)
{
  // Check if the line contains the string we're looking for, and print if it does
  if(strpos($lin, $search) == true)
    echo $lin;
}