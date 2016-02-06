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

class EventController extends Controller
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
            'from' => 'required',
//            'to' => 'required',
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
        $event->from = $request->input('from');
        $event->to = $request->input('to');
        $event->venue = $request->input('venue');
        $event->description = $request->input('description');

        $destination_path = "uploads/pictures/events/";
        $eventName = str_replace(' ', '-',$request->name);

        //Image variable list
        $imageList = ['photo_feature','photo_more','photo_1','photo_2','photo_3','photo_4','photo_5','photo_6','photo_7','photo_8'];
        $imageNameList = ['-photo-feature.','-photo-more.','-photo-1.','-photo-2.','-photo-3.','-photo-4.','-photo-5.','-photo-6.','-photo-7.','-photo-8.'];

        //Same Images to Event objects
        for($i=0; $i<10; $i++){

            $extension = $request->file($imageList[$i])->getClientOriginalExtension();
            $photo="event-".$eventName.$imageNameList[$i].$extension;
            $request->file($imageList[$i])->move($destination_path, $photo);
            $event->$imageList[$i] = $photo;
        }

        $event->save();

        return redirect('/home')->with('message','You just Created an Event!');
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
        $event = Event::find($id);

        // Validation //
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'venue' => 'required',
            'description' => 'required',
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        //Writing into database
        if(!equalTo($event->name,$request->input('name'))){
            $event->name = $request->input('name');
        }
        if(!equalTo($event->from,$request->input('from'))){
            $event->from = $request->input('from');
        }
        if(!equalTo($event->to,$request->input('to'))){
            $event->to = $request->input('to');
        }
        if(!equalTo($event->venue,$request->input('venue'))){
            $event->venue = $request->input('venue');
        }
        if(!equalTo($event->description,$request->input('description'))){
            $event->description = $request->input('description');
        }

        //Image variable list
        $imageList = ['photo_feature','photo_more','photo_1','photo_2','photo_3','photo_4','photo_5','photo_6','photo_7','photo_8'];
        $imageNameList = ['-photo-feature.','-photo-more.','-photo-1.','-photo-2.','-photo-3.','-photo-4.','-photo-5.','-photo-6.','-photo-7.','-photo-8.'];

        $destination_path = "uploads/pictures/events/";
        $eventName = str_replace(' ', '-',$request->name);

        for($i=0; $i<10; $i++){
            if($request->hasFile($imageList[$i])){
                $extension = $request->file($imageList[$i])->getClientOriginalExtension();
                $photo="event-".$eventName.$imageNameList[$i].$extension;
                $request->file($imageList[$i])->move($destination_path, $photo);
                $event->$imageList[$i] = $photo;
            }
        }

        $event->save();

        return redirect('/home')->with('message','Event '.$request->input('name').' Updated!');
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
