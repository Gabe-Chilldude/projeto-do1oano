<?php

function csvToArray(string $fileName) {
    $content = fopen($fileName, 'r');

    while(!feof($content))  {
        $lines[] = fgetcsv($content, 1000, ",");
    }

    return $lines;
}

function arrayToTable(array $array, array $indexes)  {
    $table = '<table class="table table-dark table-borderless table-striped"> <thead><tr>';

    foreach($indexes as $index)  {
        $table .= "<th>{$index}</th>";
    }

    $table .= '</tr></thead>';

    foreach($array as $account)  {
        $table .= '<tr>';
        for($i=0; $i<count($account);$i++)  {
            $table .= "<td>{$account[$i]}</td>";
        }
        $table .= '</tr>';
    }

    return $table;

}
