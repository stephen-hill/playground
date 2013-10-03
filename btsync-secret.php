<?php

// Produces a random 128 character Base32 string for use with BitTorrent Sync.

$r = '';
$a = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';

while (strlen($r) < 128)
{
	$n = mt_rand(0, 31);
	$r .= substr($a, $n, 1);
}

echo $r;

echo PHP_EOL;