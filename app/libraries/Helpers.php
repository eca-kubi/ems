<?php

use JetBrains\PhpStorm\NoReturn;

class Helpers {
    #[NoReturn]
    public static function redirect($controller, $method, $params =''): void
    {
        parse_str ($_SERVER['QUERY_STRING'], $result);
        //$current_session = isset($result['current_session'])? $result['current_session']: 'user';
        //header('location: ' . URL_ROOT . '/' . $page . '/?current_session='. $current_session);
        header('location: ' . URL_ROOT . '/' . "$controller/$method/$params");
        exit;
    }

    public static function getRequestMethod() : string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}