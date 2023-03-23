<?php
declare(strict_types=1);
const ROOT = __DIR__ . "/..";

//use Nikcrazy37\Hw14\App;

require ROOT . "/vendor/autoload.php";

use Fluent\Logger\FluentLogger;
$logger = new FluentLogger("clickhouse","8123");
$logger->post("fluentd.test.follow", array("from"=>"userA", "to"=>"userB"));
