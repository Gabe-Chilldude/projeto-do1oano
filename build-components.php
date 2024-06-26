<?php


define('COMP_PATH', __DIR__ . '/components/');
function getTemplate(string $component, array $params = []) {

    $content = file_get_contents(COMP_PATH . $component . '.php');

    if($params != []) {
        $attributes = array_keys($params);

        $content = str_replace("{{ {$attributes[0]} }}", $params[$attributes[0]], $content);
    }

    return $content;
}
