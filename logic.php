<?php 

error_reporting (0);

$password = '';
$words = Array();
$numbers = Array();
$sybmols = Array();

$numberHold = $_GET["numberWords"];

if ( $_GET["includeNumber"] == 'on') {
	$numberBoxHold = checked;
}
else {
	$numberBoxHold = '';
}

if ( $_GET["includeSymbol"] == 'on') {
	$symbolBoxHold = checked;
}
else {
	$symbolBoxHold = '';
}

$words[0] = 'giraffe';
$words[1] = 'coffee';
$words[2] = 'bucket';
$words[3] = 'gold';
$words[4] = 'running';
$words[5] = 'walking';
$words[6] = 'punch';
$words[7] = 'goat';
$words[8] = 'table';
$words[9] = 'mighty';
$words[10] = 'purple';
$words[11] = 'excellent';
$words[12] = 'wide';
$words[13] = 'coats';
$words[14] = 'crane';
$words[15] = 'cheese';
$words[16] = 'moon';
$words[17] = 'parapet';
$words[18] = 'freezing';
$words[19] = 'launch';
$words[20] = 'migrating';
$words[21] = 'beans';
$words[22] = 'glowing';
$words[23] = 'west';
$words[24] = 'buffoons';
$words[25] = 'intelligent';

$symbols[0] = '!';
$symbols[1] = '@';
$symbols[2] = '#';
$symbols[3] = '$';
$symbols[4] = '%';

$numbers[0] = '1';
$numbers[1] = '2';
$numbers[2] = '3';
$numbers[3] = '4';
$numbers[4] = '5';

if ($_GET["numberWords"] == '') {
	for ($i = 0; $i < 4; $i++) {
		if ($i == 0) {
			$random = rand(0, 25);
			$password .= $words[$random];
		}
		else {
			$random = rand(0, 25);
			$password .= '-'.$words[$random];
		}
	}
}

else {
	for ($i = 0; $i < $_GET["numberWords"]; $i++) {
		if ($i == 0) {
			$random = rand(0, 25);
			$password .= $words[$random];
		}
		else {
			$random = rand(0, 25);
			$password .= '-'.$words[$random];
		}
	}
}

if ( $_GET["includeNumber"] == 'on') {
	$random = rand(0, 4);
	$password .= $numbers[$random];
}

if ( $_GET["includeSymbol"] == 'on') {
	$random = rand(0, 4);
	$password .= $symbols[$random];
}

