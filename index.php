<?php
require_once('vendor/autoload.php');

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setUdder('-');
echo $bessie;
?>