<?php
  // Simple page redirect
function redirect($controller, $method, $params)
{
    parse_str ($_SERVER['QUERY_STRING'], $result);
    //$current_session = isset($result['current_session'])? $result['current_session']: 'user';
    //header('location: ' . URL_ROOT . '/' . $page . '/?current_session='. $current_session);
    header('location: ' . URLROOT . '/' . "$controller/$method/$params");
    exit;
  }