<?php

date_default_timezone_set('UTC');

var_dump
(
	"+10 Years",
	(new DateTime())->setTimestamp(time() + 315569000)
);

var_dump
(
	"-10 Years",
        (new DateTime())->setTimestamp(time() - 315569000)
);

var_dump
(
	"UTC",
	new DateTime('now', new DateTimeZone('UTC'))
);
