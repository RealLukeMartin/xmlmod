<?php

$doc = new DOMDocument;    
$doc->load('testerbk.xml');

$xPath = new DOMXPath($doc);
$char = ", ";
$rep = "</keyword><keyword>";

$docElements = $xPath->query('/nodes/node/Keywords');

foreach ($docElements as $docElement) {
	$values = $docElement->nodeValue;
	$str = str_replace($char, $rep, $values);
	print $str;
    $values = $str;
	$docElement->nodeValue = $str;
	$doc->Save("testernew.xml");
}