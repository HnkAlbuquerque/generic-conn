<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "pgsql:host=localhost;dbname=datateste";
$container['user'] = "postgres";
$container['pass'] = "masterkey";