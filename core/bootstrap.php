<?php
/*
require_once "core/Request.php";
require_once "core/Router.php";
require_once "core/db/QueryBuilder.php";
require_once "core/db/Connector.php";
*/

require_once "vendor/autoload.php";

$config = require_once 'config/config.php';

$queryBuilder = new QueryBuilder(
    Connector::getConnection($config['database'])
);