<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminPagesController extends Controller
{
    /**
     * Display a Admin Panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('admin\admin_widget');
    }

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
     * Show the form for creating a new event.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEvent()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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

     /**
     *Raajitha
     * Create a new User
     *
     */
    public function create_user()
    {
         if(Auth::check()) 
         {
             return view('auth.register');
             // return ('home page admin panel');
         }

     }
     /**
    *Raajitha
     * redirect to admin_widget page or login page
     *
     * 
     */
    protected function open()
    {
        if(Auth::check()) 
         {
             return view('admin/admin_widget');
             // return ('home page admin panel');
         }
         else
         {
            return view('auth/login');
         }
    }
}
