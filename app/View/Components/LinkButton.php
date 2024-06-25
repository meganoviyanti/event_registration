<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkButton extends Component
{
    public $url;
    public $params;
    public $title;
    public $type;

    public function __construct($url, $params = [], $title = '', $type = 'primary')
    {
        $this->url = $url;
        $this->params = $params;
        $this->title = $title;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.link-button');
    }
}



