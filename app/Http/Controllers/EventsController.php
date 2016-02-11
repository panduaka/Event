<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
/*use Illuminate\Support\Facades\Event;*/
use Illuminate\Support\Facades\View;
use App\Event;

class EventsController extends Controller
{

    public function event($event)
    {
        $view = View::make('FrontEnd.Event');
        $view->event_name = $event;
        return $view;
    }

    //get events list on a date
    public function getEventsOnDate($date)
    {
        $dayEvents = Event::where('date',$date)->get();
        print_r(json_encode($dayEvents));
    }
    //get all events
    public function getEvents()
    {
        $Events = Event::all();
        print_r(json_encode($Events));
    }

    //show all events
    public function showAllEvents($date)
    {
        $view = View::make('FrontEnd.AllEvents');
        $view->events = Event::all();
        return $view;
    }


}
