<?php

$xml = simplexml_load_file('book.xml');

echo '<h2>Bookstore Listing</h2>';

foreach($xml->children()as $li)
{
	echo '<b>Category:</b> '.$li->attributes()->category."<br>";
	echo 'Title: '.$li->title."<br>";
	echo 'Author: ' .$li->author."<br>";
	echo 'Year: ' .$li->year."<br>";
	echo 'Price: ' .$li->price."<br><br>";
}
?>