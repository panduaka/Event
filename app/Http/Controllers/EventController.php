<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation //
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'time' => 'required',
            'venue' => 'required',
            'description' => 'required',
            'photo_feature' => 'required|image|mimes:jpeg,png',
            'photo_more' => 'required|image|mimes:jpeg,png',
            'photo_1' => 'required|image|mimes:jpeg,png',
            'photo_2' => 'required|image|mimes:jpeg,png',
            'photo_3' => 'required|image|mimes:jpeg,png',
            'photo_4' => 'required|image|mimes:jpeg,png',
            'photo_5' => 'required|image|mimes:jpeg,png',
            'photo_6' => 'required|image|mimes:jpeg,png',
            'photo_7' => 'required|image|mimes:jpeg,png',
            'photo_8' => 'required|image|mimes:jpeg,png',
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        // Process valid data & go to success page //
        $event = new Event;
        $event->name = $request->input('name');
        $event->time = $request->input('time');
        $event->venue = $request->input('venue');
        $event->description = $request->input('description');

        $destination_path = "uploads/pictures/events/";
        $eventName = str_replace(' ', '-',$request->name);

        $extension = $request->file('photo_feature')->getClientOriginalExtension();
        $photo="event-".$eventName."-photo-feature.".$extension;
        $request->file('photo_feature')->move($destination_path, $photo);
        $event->photo_feature = $photo;

        $extension = $request->file('photo_more')->getClientOriginalExtension();
        $photo ="event-".$eventName."-photo-more.".$extension;
        $request->file('photo_more')->move($destination_path, $photo);
        $event->photo_more = $photo;

        $extension = $request->file('photo_1')->getClientOriginalExtension();
        $photo ="event-".$eventName."-photo-1.".$extension;
        $request->file('photo_1')->move($destination_path, $photo);
        $event->photo_1 = $photo;

        $extension = $request->file('photo_2')->getClientOriginalExtension();
        $photo ="event-".$eventName."-photo-2.".$extension;
        $request->file('photo_2')->move($destination_path, $photo);
        $event->photo_2 = $photo;

        $extension = $request->file('photo_3')->getClientOriginalExtension();
        $photo ="event-".$eventName."-photo-3.".$extension;
        $request->file('photo_3')->move($destination_path, $photo);
        $event->photo_3 = $photo;

        $extension = $request->file('photo_4')->getClientOriginalExtension();
        $photo ="event-".$eventName."-photo-4.".$extension;
        $request->file('photo_4')->move($destination_path, $photo);
        $event->photo_4 = $photo;

        $extension = $request->file('photo_5')->getClientOriginalExtension();
        $photo ="event-".$eventName."-photo-5.".$extension;
        $request->file('photo_5')->move($destination_path, $photo);
        $event->photo_5 = $photo;

        $extension = $request->file('photo_6')->getClientOriginalExtension();
        $photo ="event-".$eventName."-photo-6.".$extension;
        $request->file('photo_6')->move($destination_path, $photo);
        $event->photo_6 = $photo;

        $extension = $request->file('photo_7')->getClientOriginalExtension();
        $photo ="event-".$eventName."-photo-7.".$extension;
        $request->file('photo_7')->move($destination_path, $photo);
        $event->photo_7 = $photo;

        $extension = $request->file('photo_8')->getClientOriginalExtension();
        $photo ="event-".$eventName."-photo-8.".$extension;
        $request->file('photo_8')->move($destination_path, $photo);
        $event->photo_8 = $photo;

        $event->save();

        return redirect('/admin')->with('message','You just Created and Event!');

//        return view('admin.admin_widget');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

//        $isAdmin = User::isAdmin();
        return view('admin.event_edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
