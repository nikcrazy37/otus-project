<?php
declare(strict_types=1);
const ROOT = __DIR__ . "/..";

require ROOT . "/vendor/autoload.php";

use Fluent\Logger\FluentLogger;
$logger = new FluentLogger("fluentd","24224");
$res = $logger->post("fluentd", array("time"=>time(), "tag"=>"flue", "data"=>"datadatadata"));

if ($res) {
    print_r($res);
} else {
    print_r('false');
}

