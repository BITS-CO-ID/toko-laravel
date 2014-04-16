<?php

use Illuminate\Support\Collection;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getSlug($text) {
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    $text = trim($text, '-');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = strtolower($text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}

function item_depth($depth) {
    return str_repeat('<i class="fa fa-level-up fa-rotate-90"></i>&nbsp&nbsp', $depth);
}

function getOptions($name) {
    $path = storage_path() . '/administrator_settings/';
    $path = rtrim($path, '/') . '/';
    $file = $path . 'site.json';
    $data = array();
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $saveData = json_decode($json);
    }
    return $saveData->$name;
}
