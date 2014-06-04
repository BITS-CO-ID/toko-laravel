<?php

use Illuminate\Support\Collection;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function fb(){
    // get data from input
    $code = Input::get('code');
//
    // get fb service
    $fb = OAuth::consumer('Facebook');

    // check if code is valid
    // if code is provided get user data and sign in
    if (!empty($code)) {

        // This was a callback request from facebook, get the token
        $token = $fb->requestAccessToken($code);

        // Send a request with it
        $result = json_decode($fb->request('/me'), true);

//        $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
//        echo $message . "<br/>";

        //Var_dump
        //display whole array().
        return dd($result);
    }
    // if not ask for permission first
    else {
        // get fb authorization
        $url = $fb->getAuthorizationUri();

        // return to facebook login url
        return Redirect::to((string) $url);
    }
}
function getSlug($text) {
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    $text = trim($text, '-');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = strtolower($text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    if (empty($text)) {
        return '/';
    }
    return $text;
}

function item_depth($depth) {
    $label = '';
    if ($depth != 0) {
        $label = '<i class="fa fa-level-up fa-rotate-90"></i>&nbsp&nbsp';
    }
    return str_repeat('&nbsp&nbsp', $depth) . $label;
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

function menu() {
    $menus = Page::all();
    foreach ($menus as $menu) {
        if ($menu->parent_id != NULL) {
            Menu::addItem(array('text' => $menu->name, 'URL' => url($menu->slug), 'reference' => $menu->id, 'class' => 'home-icon', 'parent' => $menu->parent_id, 'weight' => $menu->lft))->toMenu('main');
        } else {
            Menu::addItem(array('text' => $menu->name, 'URL' => url($menu->slug), 'reference' => $menu->id, 'class' => 'home-icon', 'weight' => $menu->lft))->toMenu('main');
        }
    }

    return Menu::render('main');
}

function getSliders() {
    $html = '';
    $data = Slider::get();
    foreach ($data as $d) {
        $html .= '<li><img src="' . asset("uploads/sliders/thumbs/full/" . $d->image) . '" alt="" /></li>';
    }
    return $html;
}

function getSelect($option) {
    $data = array();
    $attr = Attribute::with('attrval')->where('name', $option)->get()->toArray();
    foreach ($attr as $value) {
        $value = $value['attrval'];
    }
    foreach ($value as $val) {
        $data[$val['value']] = $val['value'];
    }
    return $data;
}
