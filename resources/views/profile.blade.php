
@extends('layouts.app')
@section('title','Profile')
@section('content')



<x-profile-list :profiles="$profiles" ></x-profile-list>

@foreach($profiles as $profiles)
<div class="container-fluid profile">
    <div class="row mt-3">
        <div class="col-md-auto">
        <h2 class="text-start fw-bold  pb-0 mb-0">ABOUT YOURSELF</h2>
        
        <h5 class="text-start  ">Tell us about yourself</h5>
        </div>
        <div class="col" >
        <hr style="height:10px; border-width:0; color:black; background-color:black">
        </div>
    </div>
    
</div>


<div class="container-fluid profile">
<div class="row">
<div class="col p-3 ">




<div class="m-0">
  <p class="fw-bold fs-5">Nickname</p>
  </div>
  <div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->nickname}}</p>
</div>

</br>
<div class="pt-1 m-0">
  <p class="fw-bold fs-5">Gender</p>
  </div>
  <div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->gender}}</p>
</div>
                            
<div class="pt-4"></div>
<div class="pt-4"></div>

<div class="row pt-4 mt-4">
<div class="col text-center">



</div>
<div class=" text-center">
<div class="d-grid gap-1">
<a role="button" class="btn btn-danger btn-lg" href="/profile/edit/{{$profiles['id']}}">EDIT</a>

</div>
</div>

<div class=" text-center">
<div class="d-grid gap-1">
<form action="{{route('delete', ['id' => $profiles['id']])}}" method="post">
@csrf
@method("DELETE")
 <button type="submit" value="Delete" name="submit" class="btn btn-danger btn-lg rounded mt-3 " onclick="return confirm('Are you sure to delete?')">Delete </button>
</form>


</div>
</div>

</div>


    </div>
  <div class="col">

  <div class="p-0 m-0">
  <p class="fw-bold fs-5">Bio</p>
  </div>
  <div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->bio}}</p>
</div>

<div class="pt-2 pb-0 mb-0 pt-2 mt-2">
  <p class="fw-bold fs-5">School</p>
</div>

<div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->school}}</p>
</div>

<div class="p-0 m-0">
  <p class="fw-bold fs-5">Course</p>
  </div>
  <div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->course}}</p>
</div>

  </div>

  <div class="col">
   
  <div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Age</p>
</div>

<div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->age}}</p>
</div>

<div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Height</p>
</div>

<div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->height}}</p>
</div>


<div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Hobbies</p>
</div>

<div class="row">

<div class="col">
<div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->hobbies1}}</p>
</div>
</div>

<div class="col">
<div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->hobbies2}}</p>
</div>
</div>

<div class="col">
<div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->hobbies3}}</p>
</div>
</div>

</div>

<div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Interests</p>
</div>

<div class="row">

<div class="col">
<div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->interest1}}</p>
</div>
</div>

<div class="col">
<div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->interest2}}</p>
</div>
</div>

<div class="col">
<div class="m-auto">
  <p class="fw-bold fs-5 text-center bgwhite rounded">{{$profiles->interest3}}</p>
</div>
</div>

</div>
  </div>
</div>


</div>



@endforeach
<div class="row  col-4 mx-1 p-3 text-center">
<a role="button" class="btn btn-danger btn-lg" href="/profile/add">ADD</a>
</div>

<



@endsection

