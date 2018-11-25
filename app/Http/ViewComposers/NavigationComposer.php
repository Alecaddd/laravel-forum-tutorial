<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use App\Page;

class NavigationComposer
{
    public $pages;

    /**
     * Create a navigation composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->pages = Page::all();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('pages', $this->pages);
    }
}