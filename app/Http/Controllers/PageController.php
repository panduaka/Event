<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use View;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        $view = View::make('FrontEnd.Home');
        $view->events = Event::all();
        return $view;
    }


}
