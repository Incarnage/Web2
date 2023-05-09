<?php

namespace App\Http\Controllers;

use App\Models\preferences;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
       
        // get all the products
       
        // if there is an authenticated user, check if admin
        // if yes, get only the products with his id
        
        $profiles =Profile::where('user_id', '=', $user->id)->get();
            
        //pass the data to the view
        return view('preferences', ['profiles' => $profiles,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  \App\Models\preferences  $preferences
     * @return \Illuminate\Http\Response
     */
    public function show(preferences $preferences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\preferences  $preferences
     * @return \Illuminate\Http\Response
     */
    public function edit(preferences $preferences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\preferences  $preferences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, preferences $preferences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\preferences  $preferences
     * @return \Illuminate\Http\Response
     */
    public function destroy(preferences $preferences)
    {
        //
    }
}
