<?php

$doc = new DOMDocument;    
$doc->load('testerbk.xml');

$xPath = new DOMXPath($doc);
$char = ", ";

$docElements = $xPath->query('/nodes/node/Keywords');

foreach ($docElements as $docElement) {
	$values = $docElement->nodeValue;
	$str = str_replace($char, "</keyword><keyword>", $values);
	print $str;
    $values = $str;
	$docElement->nodeValue = $str;
	$doc->Save("testernew.xml");
}