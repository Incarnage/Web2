<?php

namespace App\Http\Controllers;

use App\Models\LikedYou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
class LikedYouController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $profiles = Profile::where('user_id', '!=', $user->id)->get();
        return view('likedyou', ['profiles' => $profiles,],);
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
     * @param  \App\Models\LikedYou  $likedYou
     * @return \Illuminate\Http\Response
     */
    public function show(LikedYou $likedYou)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LikedYou  $likedYou
     * @return \Illuminate\Http\Response
     */
    public function edit(LikedYou $likedYou)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LikedYou  $likedYou
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LikedYou $likedYou)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LikedYou  $likedYou
     * @return \Illuminate\Http\Response
     */
    public function destroy(LikedYou $likedYou)
    {
        //
    }
}
