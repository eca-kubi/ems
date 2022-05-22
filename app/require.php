<?php

// Autoload Core Libraries
spl_autoload_register(static function ($class_name) {
    $dirs = array(
        __DIR__ . "\models",
        __DIR__ . "\libraries",
        __DIR__ . "\classes",
        __DIR__ . "\dtos",
        __DIR__ . '\enums',
        __DIR__ . "\helpers",
        __DIR__ . '\exceptions',
    );
    foreach ($dirs as $dir) {
        $path = "$dir\\$class_name.php";
        if (!file_exists($path)) {
            continue;
        }
        require_once $path;
    }
});

require_once dirname(__DIR__) . "/vendor/autoload.php";

require_once __DIR__ . '/config/config.php';


    //Instantiate core class
    $init = new Core();
