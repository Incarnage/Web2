<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Profile;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\EventListener\ProfilerListener;

class ProfileController extends Controller
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
        
        $profiles = Profile::where('user_id', '=', $user->id)->get();
            
        //pass the data to the view
        return view('profile', ['profiles' => $profiles,]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addProfile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get the filename of image uploaded
        $filename = $request->img1->getClientOriginalName();
        // store in public folder
        $request->img1->move(public_path('img'), $filename);


        $profile = Profile::create([
            'nickname' => $request['nickname'],
            'bio' => $request['bio'],
            'course'=>$request['course'],
            'school'=>$request['school'],
            'age'=>$request['age'],
            'height'=>$request['height'],
            'hobbies1'=>$request['hobbies1'],
            'hobbies2'=>$request['hobbies2'],
            'hobbies3'=>$request['hobbies3'],
            'interest1'=>$request['interest1'],
            'interest2'=>$request['interest2'],
            'interest3'=>$request['interest3'],
            'gender'=>$request['gender'],
            'img1' => $filename,
            'user_id' => Auth::id(),
        ]);

       
        return redirect('profile');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('editProfile', ['profile' => $profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        if ($request->hasFile('img')) {
            $filename = $request->img1->getClientOriginalName();
            $request->img1->move(public_path('img'), $filename);
        } else {
            $filename = $profile->img1;
        }
        $profile->nickname = $request->nickname;
        $profile->bio = $request->bio;
        $profile->course = $request->course;
        $profile->school = $request->school;
        $profile->age = $request->age;
        $profile->height = $request->height;
        $profile->hobbies1 = $request->hobbies1;
        $profile->hobbies2 = $request->hobbies2;
        $profile->hobbies3 = $request->hobbies3;
        $profile->interest1 = $request->interest1;
        $profile->interest2 = $request->interest2;
        $profile->interest3 = $request->interest3;
        $profile->gender = $request->gender;
        $profile->img1 = $filename;
        $profile->save();

        
        
       
        return redirect("profile");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $profile = Profile::find($id);


        $profile->delete();
        return redirect("profile");

    }
}
