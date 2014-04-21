<?php

class HomeController extends BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.front';

    /**
     * Show the user profile.
     */
    public function home() {
        $data['pages'] = Page::allLeaves();
        $this->layout->content = View::make('template.home', $data);
    }

}
