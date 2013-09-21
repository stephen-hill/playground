<?php

$redis = new Redis();
$redis->pconnect('127.0.0.1');
$redis->set('MyKey', sha1(time()));
echo $redis->get('MyKey');
