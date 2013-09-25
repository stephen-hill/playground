<?php

// Example output from hash algorithms.

foreach(hash_algos() as $algo)
{
	$hash = hash($algo, 'Hello World');
	$length = strlen($hash);
	echo "{$algo}: {$hash} ({$length})";
	echo PHP_EOL;
}
