<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'WyriHaximus/TwigView' => $baseDir . '/vendor/wyrihaximus/twig-view//',
        'Bake' => $baseDir . '/vendor/cakephp/bake/'
    ]
];