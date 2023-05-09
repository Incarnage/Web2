

@foreach($profiles as $profile)
<div class="col-4 m-auto ">
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/img/'.$profile->img1)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 350px;">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/'.$profile->img2)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 350px;">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/'.$profile->img3)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 350px;">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="row bgwhite col-11 mx-auto rounded">
  <div class="col-3">
    <hr></hr>
    <div class="container-fluid hero-section d-flex align-items-center">
    <div class="text-center m-auto p-3">
        <h1 class="mb-4 fw-bold">INTERESTS</h1>
        <ul class="ilist">
          <li>{{$profile->interest1}}</li>
          <li>{{$profile->interest2}}</li>
          <li>{{$profile->interest3}}</li>
        </ul>  
    </div>
    </div>
  </div>
  <div class="col-1 m-auto">
        <a href="#" class="btn btn-danger btn-lg rounded-circle"><i class="fa fa-heart"></i></a>
        
  </div>
  <div class="col-3">
    <div class="d-flex align-items-center">
    <div class="text-center m-auto p-2">
      <div class="container bgyellow m-auto rounded">
      <p class="mb-3 fs-5 mt-3  "><i>{{$profile->bio}}</i></p>
</div>
        <h1 class="mb-3 fw-bold text-uppercase ">{{$profile->nickname}}, {{$profile->age}}</h1>
        <p class="mb-3 fs-3">{{$profile->gender}} </p>
        <p class="mb-3 fs-3">{{$profile->course}} </p>
        <p class="mb-1 fs-4">{{$profile->school}} </p>
    </div>
    </div>
  </div>
  <div class="col-1 m-auto">
  <a href="#" class="btn btn-danger btn-lg rounded-circle"><i class="fa fa-close"></i></a>
  </div>
  <div class="col-3">
  <hr></hr>
    <div class="container-fluid hero-section d-flex align-items-center">
    <div class="text-center m-auto p-3">
    <h1 class="mb-4 fw-bold">HOBBIES</h1>
        <ul class="ilist">
          <li>{{$profile->hobbies1}}</li>
          <li>{{$profile->hobbies2}}</li>
          <li>{{$profile->hobbies3}}</li>
        </ul>
    </div>
    </div>
  </div>
</div>

@endforeach
{{$profiles->links()}}