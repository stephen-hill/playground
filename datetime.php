<?php

date_default_timezone_set('UTC');

var_dump
(
	(new DateTime())->setTimestamp(time() + 315569000)
);

var_dump
(
        (new DateTime())->setTimestamp(time() - 315569000)
);
