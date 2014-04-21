<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PagesController extends \BaseController {

    protected $page;
    protected $layout = 'layouts.front';
    public function __construct(Page $page) {
        $this->page = $page;
    }

    public function view($uri) {
        if (substr($uri, 0, 1) != '/') {
            $uri = $uri;
        }
        $this->data['page'] = $this->page->where('slug', $uri)->first();
        if (!$this->data['page']) {
            App::abort(404);
        }
        $template = strtolower($this->data['page']->template);
        $method = '_' . $template;
        if (method_exists($this, $method)) {
            $this->$method();
        }
        $this->layout->content = View::make('template.'.$template, $this->data);
    }

    private function _home() {
        $this->data['products'] = Product::all();
    }
    
    private function _page() {
        
    }
    
    private function _about() {
        
    }

}
