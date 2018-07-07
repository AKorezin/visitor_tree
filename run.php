<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$execution = new akorezin\Main();
$execution->init();
exit($execution->exec());
